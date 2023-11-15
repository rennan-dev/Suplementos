<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

if (isset($_POST['adicionar_carrinho'])) {
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];

    // Adiciona o produto ao carrinho
    $_SESSION['carrinho'][] = array(
        'id' => $produto_id,
        'quantidade' => $quantidade
    );
}
?>
