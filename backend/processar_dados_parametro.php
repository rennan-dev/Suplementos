<?php
session_start();

include 'conexao.php';

// Verifique se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: ../pages/signin.php");
    exit();
}

// Obtenha o e-mail do usuário a partir da sessão
$emailUsuario = $_SESSION['email'];

// Processar parâmetros do produto se disponíveis
if (isset($_GET['product_id'], $_GET['product_name'], $_GET['product_price'], $_GET['quantity'])) {
    $product_id = $_GET['product_id'];
    $product_name = $_GET['product_name'];
    $product_price = $_GET['product_price'];
    $quantity = $_GET['quantity'];

    // Adicione o produto ao carrinho ou faça qualquer outra lógica necessária
    // Exemplo: Adicionar ao carrinho de sessão
    $cart_item = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $quantity,
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = $cart_item;

    // Agora você pode redirecionar para a página de pagamento ou outra página conforme necessário
    header("Location: ../pages/pagamento.php");
    exit();
}

// Restante do seu script continua aqui...
?>
