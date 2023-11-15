<!-- excluir_conta.php -->
<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Incluir o arquivo de conexão
include 'conexao.php';

// Excluir conta e dados associados no banco de dados
$email = $_SESSION["email"];

// Exemplo de SQL para excluir a conta (ajuste conforme necessário)
$sql = "DELETE FROM usuario WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->close();

// Limpar todas as variáveis de sessão
session_unset();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou outra página após a exclusão
header("Location: ../pages/signin.html");
exit();
?>
