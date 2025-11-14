<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro.db";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$Nome  = $_POST['nome'] ?? '';
$Telefone  = $_POST['telefone'] ?? '';
$Turma  = $_POST['turma'] ?? '';

$sql = "INSERT INTO curso (Nome, Telefone, Turma) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro na preparação da query: " . $conexao->error);
}

$stmt->bind_param("sss", $Nome, $Telefone, $Turma);

if ($stmt->execute()) {
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
