<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro.db";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    echo json_encode(["erro" => "Erro na conexão"]);
    exit;
}

$email = $_GET['email'] ?? '';

if (!$email) {
    echo json_encode(["erro" => "E-mail não fornecido"]);
    exit;
}

// Busca os dados do aluno
$sqlAluno = "SELECT id, nome_completo, email FROM alunos WHERE email = ?";
$stmt = $conexao->prepare($sqlAluno);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$aluno = $result->fetch_assoc();

if (!$aluno) {
    echo json_encode(["erro" => "Aluno não encontrado"]);
    exit;
}

// Busca as matrículas do aluno
$sqlMatriculas = "
    SELECT m.id, c.nome AS curso, m.data_matricula, m.status, m.turma
    FROM matriculas m
    INNER JOIN cursos c ON m.curso_id = c.id
    WHERE m.aluno_id = ?
";
$stmt2 = $conexao->prepare($sqlMatriculas);
$stmt2->bind_param("i", $aluno['id']);
$stmt2->execute();
$result2 = $stmt2->get_result();
$matriculas = $result2->fetch_all(MYSQLI_ASSOC);

$aluno['matriculas'] = $matriculas;

echo json_encode($aluno);
$stmt->close();
$stmt2->close();
$conexao->close();
?>
