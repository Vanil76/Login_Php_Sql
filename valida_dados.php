<?php

//verifica se os campos não estão vazios
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: http://localhost/login/?Login=erro');
}


echo 'tudo ok';

//TERMINAR AQUI
//verificar no banco de dados se EMAIL e SENHA existem
//se tudo tiver ok.... ir para cliente logado



?>