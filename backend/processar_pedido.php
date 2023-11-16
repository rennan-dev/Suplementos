<?php

session_start();

include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Verifique se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: ../pages/signin.php");
    exit();
}

// Obtenha o e-mail do usuário a partir da sessão
$emailUsuario = $_SESSION['email'];

// Obtenha os dados do formulário
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$itensCarrinho = $_POST['itens_carrinho'];
$total = 0;

// Decodificar os itens do carrinho
$decodedCartData = json_decode($itensCarrinho, true);

if (!empty($decodedCartData)) {
    foreach ($decodedCartData as $item) {
        if (isset($item['price'], $item['quantity'])) {
            $total += $item['price'] * $item['quantity'];
        }
    }
}

$sql = "INSERT INTO pedidos (email_usuario, endereco, bairro, cidade, estado, cep, itens_carrinho, total) VALUES ('$emailUsuario', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$itensCarrinho', $total)";

if ($mysqli->query($sql) === TRUE) {

    echo '<script type="text/javascript">
            alert("Pedido Enviado para Banco de Dados");
            window.location.href = "../pages/agradecimento.php";
          </script>';
} else {
    echo "Erro ao salvar o pedido: " . $mysqli->error;
}

// Feche a conexão com o banco de dados
$mysqli->close();

}
?>
