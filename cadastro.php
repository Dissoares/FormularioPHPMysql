<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexao.php';

    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $usuario, $email, $senha);
        mysqli_stmt_execute($stmt);
        
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $cadastro_bem_sucedido = true;
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro na consulta" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}
?>
