<?php

session_start();

require "conectaBD.php";

$_POST['email'];
$_POST['senha'];

if(empty($_POST['email']) || empty($_POST['senha'])){
    $_SESSION['Login'] = 'erro';
    header('location: http://localhost/login/index.php');
}

$query = 'SELECT email, senha FROM tb_fake';
$smtm = $con->prepare($query);
$smtm->execute();
$busca = $smtm->fetchAll(PDO::FETCH_ASSOC);

$loginSucess = false;

foreach($busca as $key => $value){
    if($value['email'] == $_POST['email'] && $value['senha'] == $_POST['senha']){
        $loginSucess = true;        
    }
}

if($loginSucess){
    header('Location:http://localhost/login/cliente_logado.php');
} else {
    $_SESSION['valida'] = 'erro';
    header('Location:http://localhost/login/index.php');
}

?>