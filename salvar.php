<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "cadastro";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$Nome  = $_POST['fullname'] ?? '';
$Email = $_POST['email'] ?? '';
$Senha = $_POST['password'] ?? '';

if (empty($Nome) || empty($Email) || empty($Senha)) {
    die("Preencha todos os campos!");
}

$sql = "INSERT INTO matriculas (Nome, Email, Senha) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("sss", $Nome, $Email, $Senha);

if ($stmt->execute()) {
    // ✅ Cadastro feito com sucesso — redireciona de volta ao login
    header("Location: login.html");
    exit;
} else {
    // ❌ Em caso de erro, mostra mensagem (opcional)
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
