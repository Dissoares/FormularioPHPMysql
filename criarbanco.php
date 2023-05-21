<?php
$host = "localhost";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($host, $usuario, $senha);
if ($mysqli->connect_error) {
    die("Erro na conexão MySQL: " . $mysqli->connect_error);
}

$banco = "bancoformulario";
$criarBanco = "CREATE DATABASE IF NOT EXISTS $banco DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
if ($mysqli->query($criarBanco) === FALSE) {
    die("Erro ao criar banco $banco" . $mysqli->error);
}

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
if (mysqli_connect_error()) {
    die("Erro de conexão" . mysqli_connect_error());
}
$criarTabela = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(25) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(50) NOT NULL
) CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
if (mysqli_query($conexao, $criarTabela) === FALSE) {
    die("Erro ao criar a tabela 'usuarios': " . mysqli_error($conexao));
}
else{

    echo "Banco: $banco criado com sucesso!..<br>";
    echo "<a href='index.php'> Ir para cadastro</a>";
}

?>
