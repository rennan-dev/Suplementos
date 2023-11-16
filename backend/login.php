
<?php

session_start();

// Incluir o arquivo de conexão
include 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT Nome, Sobrenome, Email FROM usuario WHERE email = ? AND senha = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);  
    $stmt->execute();
    $stmt->store_result();

    // Se as credenciais estiverem corretas, redirecione para a página do usuário
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nome, $sobrenome, $email);
        $stmt->fetch();

        // Armazena informações do usuário na sessão
        $_SESSION["nome"] = $nome;
        $_SESSION["sobrenome"] = $sobrenome;
        $_SESSION["email"] = $email;

        // Redirecione para a página do usuário
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login.");
            window.location.href = "../pages/signin.php";
          </script>';
    }

    $stmt->close();
}
?>
