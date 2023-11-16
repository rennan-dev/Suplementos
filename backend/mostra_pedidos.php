<?php
echo '<script>';
echo 'console.log("Mensagem de depuração PHP");';
echo '</script>';

include 'conexao.php';

$pedidos = array();
$erro = "";

// Verifique se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: ../pages/signin.php");
    exit();
}

$email_do_usuario_logado = $_SESSION['email'];

$sql = "SELECT * FROM pedidos WHERE email_usuario = '$email_do_usuario_logado'";
$resultado = $mysqli->query($sql);

if ($resultado) {
    echo '<script>';
    echo 'console.log("Coletou");';
    echo '</script>';
    
    while ($linha = $resultado->fetch_assoc()) {
        $pedidos[] = $linha;
    }
} else {
    echo '<script>';
    echo 'console.log("Erro");';
    echo '</script>';
    // Tratar erros de consulta
    $erro = "Erro na consulta: " . $mysqli->error;
}
$mysqli->close();
?>

<main class="container mt-5">
    <?php if (isset($pedidos)): ?>
        <h2 class="text-center mb-4">Seus Pedidos</h2>
        <?php foreach ($pedidos as $pedido): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>ID do Pedido:</strong> <?php echo $pedido['id']; ?></p>
                    <p class="card-text"><strong>E-Mail:</strong> <?php echo $pedido['email_usuario']; ?></p>
                    <p class="card-text"><strong>Endereco:</strong> <?php echo $pedido['endereco']; ?></p>
                    <p class="card-text"><strong>Bairro:</strong> <?php echo $pedido['bairro']; ?></p>
                    <p class="card-text"><strong>Cidade:</strong> <?php echo $pedido['cidade']; ?></p>
                    <p class="card-text"><strong>Estado:</strong> <?php echo $pedido['estado']; ?></p>
                    <p class="card-text"><strong>CEP:</strong> <?php echo $pedido['cep']; ?></p>
                    <p class="card-text"><strong>Item(ns):</strong> <?php echo $pedido['itens_carrinho']; ?></p>
                    <p class="card-text"><strong>Total:</strong> <?php echo $pedido['total']; ?></p>
                    <p class="card-text"><strong>Data do Pedido:</strong> <?php echo $pedido['data_pedido']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php elseif (isset($erro) && !empty($erro)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php endif; ?>
</main>

