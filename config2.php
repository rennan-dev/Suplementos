<?php
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
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $checksenha = $_POST["checksenha"];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuario (nome, sobrenome, email, senha, checksenha) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $nome, $sobrenome, $email, $senha, $checksenha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . $mysqli->error;
    }

    $stmt->close();
} else {
    echo "Não conseguiu pegar os dados";
}

$mysqli->close();
?>
