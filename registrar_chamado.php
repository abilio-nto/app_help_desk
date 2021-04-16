<?php
session_start();
$chamado = [];

foreach($_POST as $itens){
    array_push($chamado, str_replace('#','-',$itens));
}

$texto = $_SESSION['id']."#".implode('#',$chamado).PHP_EOL;

$arquivo = fopen('chamados.txt', 'a');
fwrite($arquivo,$texto);
fclose($arquivo);
header('location:abrir_chamado.php')

?>