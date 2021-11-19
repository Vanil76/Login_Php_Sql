<?php

require "conectaBD.php";

/*verifica se usuário já existe*/
$valida_user = $con->prepare('SELECT email FROM tb_fake');
$valida_user->execute();
$lista_emails = $valida_user->fetchAll();

$_SESSION['email_cadastrado'] = false;1
foreach ($lista_emails as $key => $value){
    if($_POST['email'] == $lista_emails[$key]['email']){
        $_SESSION['email_cadastrado'] = true;        
    }
}

if($_SESSION['email_cadastrado']){
    header('Location:http://localhost/login/criar_conta.php');
} else {
    header('Location:http://localhost/login/cadastrar_usuario.php');
}


?>