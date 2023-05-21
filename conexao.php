<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bancoformulario";

$mysqli = new mysqli($host, $usuario, $senha);

$resultado = $mysqli->query("SHOW DATABASES LIKE '$banco'");
if (!$resultado || $resultado->num_rows === 0) {
    echo"Banco ( $banco ) não encontrado";
    echo "<a href='criarbanco.php'> <br>Criar banco de dados</a>";
    die();
}
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
?>
