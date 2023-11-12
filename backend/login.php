<?php

session_start();
include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
    //$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);

    /*if (verificarCredenciais($mysqli, $email, $senha, $nome)) {

        // Armazenar o nome do usuário na sessão
        $_SESSION['email'] = $email;
        
        echo '<script type="text/javascript">
            alert("Login bem-sucedido.");
            window.location.replace("../index.html");
            </script>';
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login.");
            window.location.href = "../pages/signin.html";
          </script>';
    }*/
    verificarCredenciais($mysqli, $email, $senha);
}

// Função para verificar as credenciais no banco de dados
function verificarCredenciais($mysqli, $email, $senha) {
    /*try {
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
    }*/

   $query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
    $result = $mysqli->query($query);

    if($result->num_rows == 1) {
        $_SESSION['email'] = $email;
        //header("Location: ../index.html");
        header("Location: ../index.html");
    }else {
        header("Location: ../pages/signin.html");
    }

    $mysqli->clone();
}

?>
