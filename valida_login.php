<?php
$usuario_autenticado = false;

 $login_usuarios = [
     ['email'=>'abiliofcb@gmail.com', 'senha'=>'1234567'],
     ['email'=>'teste@gmail.com', 'senha'=>'abcde'],
    ];


     

    foreach($login_usuarios as $users){

        if($users['email'] === $_POST['email'] && $users['senha']===$_POST['senha']){
            $usuario_autenticado= true;
        }
    }
    
    if($usuario_autenticado){
        echo "Usuario autenticado";

    }else{
        header("location: index.php?login=erro");
    }


?>