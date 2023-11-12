<?php
// Conexão com o banco de dados e outras configurações
error_reporting(E_ALL);
ini_set('display_errors', '1');

$host = "localhost"; // Altere para o host do seu banco de dados
$username = "root"; // Altere para o nome de usuário do seu banco de dados
$password = ""; // Altere para a senha do seu banco de dados
$database = "suplementos"; // Altere para o nome do seu banco de dados

// Conectar ao banco de dados
$mysqli = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
} else {
    echo "Conectado com Sucesso";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);

    if (verificarCredenciais($mysqli, $email, $nome)) {
        header("Location: ../index.html");
        exit();
    } else {
        echo '<script type="text/javascript">
            alert("Erro ao fazer login.");
            window.location.href = "../pages/signin.html";
          </script>';
    }
}

// Função para verificar as credenciais no banco de dados
function verificarCredenciais($mysqli, $email, $nome) {
    try {
        $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE email = ? AND nome = ?");
        $stmt->bind_param("ss", $email, $nome);
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
?>
