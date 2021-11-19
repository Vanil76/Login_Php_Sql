<?php
session_start();
require "conectaBD.php";

$permissao = true;

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])){
    $_SESSION['Erro'] = 'erro';
    $permissao = false;
    header('location: http://localhost/login/criar_conta.php');
}

if($permissao && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    $valida_user = $con->prepare('SELECT email FROM tb_fake');
    $valida_user->execute();
    $lista_emails = $valida_user->fetchAll();

    foreach ($lista_emails as $key => $value){
        if($_POST['email'] == $lista_emails[$key]['email']){
            $permissao = false;
            $_SESSION['email_cadastrado'] = 'email_cadastrado';
            header('Location:http://localhost/login/criar_conta.php');
            //echo "Cliente " . $_POST['email'] ." já está cadastrado";
            //avisar que usuário já existe...
        }
    }
}

if($permissao){
    $query = "insert into tb_fake(nome, email, senha)values(
        :nome, :email, :senha)";
    
    try {
        $objStmt = $con->prepare($query);//retorna um obj PDOStatement
    
        $objStmt->bindValue(':nome', $_POST['nome']);
        $objStmt->bindValue(':email', $_POST['email']);
        $objStmt->bindValue(':senha', $_POST['senha']);
    
        $objStmt->execute();
        
        header('Location: http://localhost/login/cliente_cadastrado.html');
        
    } catch (PDOException $e){
        echo $e;
    }    
}



?>