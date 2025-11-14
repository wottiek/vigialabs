<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

// Configurações do banco
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Falha na conexão: ' . $conexao->connect_error
    ]);
    exit;
}

// Dados do formulário
$Nome     = $_POST['nome']      ?? '';
$Telefone = $_POST['telefone']  ?? '';
$Turma    = $_POST['turma']     ?? '';
$Curso = $_POST['curso_nome']
      ?? $_POST['curso']
      ?? '';

$Status   = $_POST['status']    ?? 'Pendente';

// Validação
if (empty($Nome) || empty($Telefone) || empty($Turma) || empty($Curso)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Campos obrigatórios não preenchidos.'
    ]);
    exit;
}

// Inserção
$sql = "INSERT INTO curso (Nome, Telefone, Turma, Curso, Status) VALUES (?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Erro na preparação da query: ' . $conexao->error
    ]);
    exit;
}

$stmt->bind_param("sssss", $Nome, $Telefone, $Turma, $Curso, $Status);

if ($stmt->execute()) {
    $last_id = $conexao->insert_id;

    echo json_encode([
        'status' => 'success',
        'message' => 'Cadastro realizado com sucesso!',
        'matricula' => [
            'id' => $last_id,
            'nome' => $Curso,
            'turma' => $Turma,
            'dataMatricula' => date('d/m/Y'),
            'status' => $Status
        ]
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Erro ao executar a query: ' . $stmt->error
    ]);
}

$stmt->close();
$conexao->close();
?>
