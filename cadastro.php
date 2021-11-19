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
            <h1>Crie sua conta</h1>
            <form action="valida_user.php" method="POST">
                <input type="text" placeholder="Nome" class="margem" name="nome">
                <input type="email" placeholder="Email" class="margem" name="email">                
                <input type="password" placeholder="Senha" class="margem" name="senha">
                <input type="password" placeholder="Repita sua senha" class="margem" name="repeteSenha">
                <a href="#" class="margem">Voltar ao login</a>
                <input type="submit" value="Criar conta" id="btn" class="margem">
            </form>
        </div>
    </header>    
</body>
</html>