<?php
 //conecta no mysql
 include('conecta.php');

 //monta a consulta sql
 $query= "SELECT *
          FROM usuarios
          WHERE usuario = '{$_POST['usuario']}' AND
                senha = MD5('{$_POST['senha']}')";

 //envia a consulta para o mysql
 $result= mysql_query($query,$conexao);

 //testa se retornou 1 resultado.
 //qualquer coisa diferente de 1, nega o acesso
 if(mysql_num_rows($result) != 1){
    echo "Usuário ou senha inválidos";
    exit();
 }

 //pega os dados retornados pela consulta
 $dado= mysql_fetch_array($result);

 //cria a sessao
 session_name('sistema');
 session_start();
 $_SESSION['nome']   = $dado['nome'];
 $_SESSION['usuario']= $dado['usuario'];
 $_SESSION['senha']  = $dado['senha'];


 //redireciona para a pagina principal do sistema
 header("Location:principal.php");
?>