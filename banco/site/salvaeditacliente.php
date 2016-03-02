<?php
 include('conecta.php');
 $query= "UPDATE clientes 
          SET nome='{$_POST['nome']}',
              email='{$_POST['email']}',
              cidade='{$_POST['cidade']}',
              estado='{$_POST['estado']}'
          WHERE id_cliente = {$_POST['id']}";
 
 if(!mysql_query($query,$conexao)){
    echo "Erro ao salvar os dados!!<br>";
    echo mysql_error();
 }else{
       echo "Dados salvos com sucesso!";
 }
 
?>