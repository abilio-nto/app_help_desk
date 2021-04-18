<?php
session_start();
$chamados = [];
$chamado =[];
$existe = false;
// $arquivo = file('chamados.txt');


// foreach($arquivo as $itens){

//     if(mb_strrpos($itens, $_SESSION['id_chamado'])){
//         echo "esta";
//     }
   
// }

foreach($_POST as $itens){
            array_push($chamado, str_replace('#','-',$itens));
        }
        
        $texto = $_SESSION['id_chamado']."#".$_SESSION['id']."#".implode('#',$chamado).PHP_EOL;
        
    //     $arquivo = fopen('chamados.txt', 'a');
    //     fwrite($arquivo,$texto);
    //     fclose($arquivo);
    //     header('location:abrir_chamado.php');

$arquivo = fopen('chamados.txt','r+');
while(!feof($arquivo)){
    $linhas = fgets($arquivo);
    $chamados[]=$linhas;
  
}
foreach($chamados as $i => $itens){
    if(str_contains($itens,$_SESSION['id_chamado'])){
        unset($chamados[$i]);
        unlink('chamados.txt');
        $arquivo = fopen('chamados.txt', 'a');
            fwrite($arquivo,$texto);
            fclose($arquivo);
    }

}
 
      
        
//fwrite($arquivo,$linhas);

// if($existe){

//      header('location: abrir_chamado.php');

// if(str_contains($_SESSION['id_chamado'],$linhas)){
      
// }
// }
// else{
//     foreach($_POST as $itens){
//         array_push($chamado, str_replace('#','-',$itens));
//     }
    
//     $texto = uniqid()."#".$_SESSION['id']."#".implode('#',$chamado).PHP_EOL;
    
//     $arquivo = fopen('chamados.txt', 'a');
//     fwrite($arquivo,$texto);
//     fclose($arquivo);
//     header('location:abrir_chamado.php');
// }

?>