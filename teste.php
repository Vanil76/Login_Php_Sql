<!DOCTYPE html>
<html lang="en">
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
            <h1>Login</h1>
            <form action="valida_login.php" method="POST">
                <input type="email" placeholder="email" class="margem" name="email">
                <?php if(isset($_GET['Login']) && $_GET['Login'] == 'erro') { ?>                    
                    <?php if(empty($_POST['email'])) {echo '<span class="aviso">Favor preencher o campo email</span>'; } ?>
                <?php } ?>

                <input type="password" placeholder="senha" class="margem" name="senha" >
                <?php if(isset($_GET['Login']) && $_GET['Login'] == 'erro') { ?>                    
                    <?php if(empty($_POST['senha'])) {echo '<span class="aviso">Favor preencher o campo senha</span>'; } ?>
                <?php } ?>
                <a href="criar_conta.php" class="margem">Cadastre-se</a>
                <input type="submit" value="Login" id="btn" class="margem">
            </form>
        </div>
    </header>    
</body>
</html>