<?php
session_start();
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id=null;
$perfis = array(1=>'Adminisgtrador', 2 => 'Usuário');
 $login_usuarios = [
     ['id'=> 1, 'email'=>'abiliofcb@gmail.com', 'senha'=>'1234567', 'perfil_id' => 1],
     ['id'=> 2, 'email'=>'teste@gmail.com', 'senha'=>'abcde' ,'perfil_id' => 1],
     ['id'=> 3, 'email'=>'maria@gmail.com', 'senha'=>'abc123' ,'perfil_id' => 2],
    ];


     

    foreach($login_usuarios as $users){

        if($users['email'] === $_POST['email'] && $users['senha']===$_POST['senha']){
            $usuario_autenticado= true;
            $usuario_id = $users['id'];
            $usuario_perfil_id = $users['perfil_id'];
        }
    }
    
    if($usuario_autenticado){
        echo "Usuario autenticado";
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location: home.php');   
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header("location: index.php?login=erro");
    }


?>