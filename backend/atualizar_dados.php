<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'conexao.php';

    $tipo = $_POST["tipo"];
    $novoValor = $_POST["novoValor"];
    $email = $_SESSION["email"];


    // Atualizar dados no banco de dados
    $sql = "UPDATE usuario SET $tipo = ? WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $novoValor, $email);
    $stmt->execute();
    $stmt->close();

    // Atualizar variáveis de sessão
    if ($tipo === 'nome') {
        $_SESSION["nome"] = $novoValor;
    } elseif ($tipo === 'sobrenome') {
        $_SESSION["sobrenome"] = $novoValor;
    }

    // Retornar resposta (opcional)
    echo "Dados atualizados com sucesso";
}
?>
