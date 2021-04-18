<?php
//error_reporting(0);
require_once('usuario_autenticado.php');
if(isset($_SESSION['id_chamado'])){ 
$arquivo = fopen('chamados.txt', 'r+');
$chamados = [];

while(!feof($arquivo)){
    $dados = fgets($arquivo);
    $chamados[] = $dados;
    
}
$chamados_registrados;
foreach($chamados as $itens){ 

$chamados_registrados = explode("#", $itens);

if(in_array($_SESSION['id_chamado'],$chamados_registrados)){
     
  $titulo=$chamados_registrados[2];
  $categoria = $chamados_registrados[3];
  $descricao=$chamados_registrados[4];
}
}
}

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
         <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
         <li>       
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registrar_chamado.php" method="post">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título" value=<?=$_SESSION['editar']== 1 ? $titulo : ' ';?>>
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control" >     
                      <?=$_SESSION['editar']== 1 ? "<option>".$categoria."</option>": ' ';?>         
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3" ><?=$_SESSION['editar']== 1 ? $descricao : ' '?></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>