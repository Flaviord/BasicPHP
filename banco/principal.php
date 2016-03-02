<?php
 session_name('sistema');
 session_start();

 //conecta no mysql
 include('conecta.php');

 //testa se o usario fez o login
 if(!isset($_SESSION['usuario'])){
    echo "<script language=\"javascript\">
           alert('Acesso negado!!!');
           document.location.replace('index.php');
          </script>";
 }

 echo "Olá {$_SESSION['nome']}, bom trabalho!";
?>
<hr>
<a href="principal.php">Home</a>&nbsp;|&nbsp;
<a href="principal.php?t=formcliente.php">Clientes</a>&nbsp;|&nbsp;
Produtos&nbsp;|&nbsp;
Fornecedores&nbsp;|&nbsp;
Pedidos&nbsp;|&nbsp;
Sair
<hr>
<?php
  if(isset($_GET['t'])){
     include("site/{$_GET['t']}");
  }
?>
