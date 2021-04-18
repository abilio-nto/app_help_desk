<?php
session_start();
$_SESSION['id_chamado'] = $_POST['id_chamado'];
$_SESSION['editar'] = true;
header('location: abrir_chamado.php');

?>