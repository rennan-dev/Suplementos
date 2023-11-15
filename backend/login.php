
<?php
/*
session_start();
include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

    if (verificarCredenciais($mysqli, $email, $senha, $nome)) {

        // Armazenar o nome do usuário na sessão
        $_SESSION['email'] = $email;
        $_SESSION['usuario_logado'] = true;
        
        echo '<script type="text/javascript">
            alert("Login bem-sucedido.");
            window.location.replace("../index.php");
            </script>';
            exit();
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login.");
            window.location.href = "../pages/signin.html";
          </script>';
    }
   
}

// Função para verificar as credenciais no banco de dados
function verificarCredenciais($mysqli, $email, $senha) {
    try {
        $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();

        return ($usuario !== null);
    } catch (Exception $e) {
        // Trate os erros de conexão ou consulta aqui
        // echo "Erro: " . $e->getMessage();
        return false;
    }

  
}
*/


//TESTE
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
    $stmt->bind_param("ss", $email, $senha);  // Use uma função de hash para a senha em um ambiente de produção
    $stmt->execute();
    $stmt->store_result();

    // Se as credenciais estiverem corretas, redirecione para a página do usuário
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nome, $sobrenome, $email);
        $stmt->fetch();

        // Armazene informações do usuário na sessão
        $_SESSION["nome"] = $nome;
        $_SESSION["sobrenome"] = $sobrenome;
        $_SESSION["email"] = $email;

        // Redirecione para a página do usuário
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login.");
            window.location.href = "../pages/signin.html";
          </script>';
    }

    // Feche a declaração
    $stmt->close();
}
?>
