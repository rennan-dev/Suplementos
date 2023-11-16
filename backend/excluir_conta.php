<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Incluir o arquivo de conexão
include 'conexao.php';

// Iniciar uma transação para garantir que ambas as exclusões(usuario e pedidos) sejam bem-sucedidas ou nenhuma delas seja realizada
$mysqli->begin_transaction();

try {
    // Excluir pedidos associados ao usuário
    $email = $_SESSION["email"];
    $stmtPedidos = $mysqli->prepare("DELETE FROM pedidos WHERE email_usuario = ?");
    $stmtPedidos->bind_param("s", $email);
    $stmtPedidos->execute();
    $stmtPedidos->close();

    // Excluir o usuário
    $stmtUsuario = $mysqli->prepare("DELETE FROM usuario WHERE email = ?");
    $stmtUsuario->bind_param("s", $email);
    $stmtUsuario->execute();
    $stmtUsuario->close();

    // Limpar todas as variáveis de sessão
    session_unset();

    // Confirmar as alterações na transação
    $mysqli->commit();

    // Destruir a sessão
    session_destroy();

    // Redirecionar para a página de login ou outra página após a exclusão
    header("Location: ../pages/signin.php");
    exit();
} catch (Exception $e) {
    // Se ocorrer algum erro, reverter as alterações na transação e tratar o erro
    $mysqli->rollback();

    // Exibir ou registrar o erro conforme necessário
    echo "Erro: " . $e->getMessage();
}
?>
