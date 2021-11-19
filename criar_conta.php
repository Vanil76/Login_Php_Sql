<?php
session_start();
/*
if(isset($_SESSION['email_cadastrado'])){
    echo '<pre>';
    print_r($_SESSION['email_cadastrado']);
    echo '<br>';
    echo 'Email já cadastrado';
    echo '</pre>';
}
*/

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Crie sua conta</h1>
            <form action="cadastrar_usuario.php" method="POST">                
                <input type="text" placeholder="Nome" class="margem" name="nome">              
                <input type="email" placeholder="Email" class="margem" name="email">
                <input type="senha" placeholder="Senha" class="margem" name="senha">
                <a href="index.php" class="margem">Voltar ao login</a>
                
                <input type="submit" value="Criar conta" id="btn" class="margem">
                <?php if(isset($_SESSION['email_cadastrado']) && $_SESSION['email_cadastrado'] == 'email_cadastrado') { ?>
                    <?php echo '<span class="aviso">Email já cadastrado</span>'; ?>
                <?php } ?>

                <?php if(isset($_SESSION['Erro']) && $_SESSION['Erro'] == true) { ?>
                    <?php echo '<span class="aviso">Favor preecher todos os campos</span>'; ?>
                <?php } ?>
            </form>
        </div>
    </header>    
</body>
</html>