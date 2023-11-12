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
    // Verifica se o formulário foi submetido

    $email = $_POST['email']; // Supondo que o campo de e-mail seja chamado 'email'
    $senha = $_POST['senha']; // Supondo que o campo de senha seja chamado 'senha'

    // Verificar as credenciais no banco de dados (substitua com a lógica real)
    // Se as credenciais estiverem corretas, redirecione para a página inicial
    if (verificarCredenciais($email, $senha)) {
        echo '<script type="text/javascript">
                window.location.href = "../index.html";
              </script>';
    } else {
        // Se as credenciais estiverem incorretas, exiba uma mensagem de erro
        echo '<script type="text/javascript">
            alert("Credenciais incorretas.");
            window.location.href = "../pages/signin.html";
          </script>';
    }
}

// Função para verificar as credenciais no banco de dados
function verificarCredenciais($email, $senha) {
    // Substitua essas configurações com as informações reais do seu banco de dados
    $dsn = 'mysql:host=localhost; dbname=suplementos;charset=utf8';
    $usuario_bd = 'root';
    $senha_bd = '';

    try {
        $pdo = new PDO($dsn, $usuario_bd, $senha_bd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $stmt->execute([$email, $senha]);
        $usuario = $stmt->fetch();

        // Verifica se o usuário foi encontrado no banco de dados
        return ($usuario !== false);
    } catch (PDOException $e) {
        // Trate os erros de conexão ou consulta aqui
        // Por exemplo, você pode registrar o erro ou redirecionar para uma página de erro
        // echo "Erro de conexão: " . $e->getMessage();
        return false;
    }
}

?>
