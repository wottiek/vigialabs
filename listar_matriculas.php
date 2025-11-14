<?php
header('Content-Type: application/json; charset=utf-8');

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    echo json_encode([
        "status" => "error",
        "message" => "Erro de conexão: " . $conexao->connect_error
    ]);
    exit;
}

// Busca todas as matrículas
$sql = "SELECT id, Nome, Telefone, Turma, Curso, Status,
        IFNULL(DataHora, NOW()) AS DataHora
        FROM curso
        ORDER BY id DESC";

$result = $conexao->query($sql);

$matriculas = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $matriculas[] = [
            "id" => $row["id"],
            "nome" => $row["Curso"],
            "turma" => $row["Turma"],
            "dataMatricula" => date("d/m/Y H:i", strtotime($row["DataHora"])),
            "status" => $row["Status"]
        ];
    }
}

echo json_encode([
    "status" => "success",
    "matriculas" => $matriculas
]);

$conexao->close();
?>
