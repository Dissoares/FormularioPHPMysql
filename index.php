<?php
include 'conexao.php';
$mensagem = "";
$cadastro_bem_sucedido = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'cadastro.php';

    if ($cadastro_bem_sucedido) {
        $mensagem = "Cadastro realizado com sucesso!..";
    } else {
        $mensagem = "Erro ao cadastrar usuário, preencha os dados corretamente.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro</title>
</head>
<body>
<?php if ($mensagem == ''){ ?>
    <h2 class="titulo">Cadastrar Usuário</h2>
    <form id="cadastro" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="exibirMensagem('<?php echo $mensagem; ?>')">
        <label for="usuario">*Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label for="email">*Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">*Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
<?php } ?>

<?php if ($mensagem != ''){ ?>
<div class="mensagem">
    <?php echo $mensagem; ?></div>
<?php } ?>


<?php if ($cadastro_bem_sucedido != false) {?>
    <div class="bemvindo">
    <?php
    echo "<br>";
    echo "<b>Bem vindo!</b> " . $usuario . "✅<br>";
    echo "<br>";
    echo "<b>Seus dados cadastrados:</b><br>";
    echo "<br>";
    echo "<b>Usuário:</b> " . $usuario . "<br>";
    echo "<b>Email:</b> " . $email . "<br>";
    echo "<b>Senha:</b> " . $senha . "<br>";
    echo "<br>";?>
    <a href="<?php echo dirname($_SERVER['PHP_SELF']); ?>/index.php">Cadastrar um novo usuário</a></div>
</div>
<?php } ?>


</div>
</body>
</html>
