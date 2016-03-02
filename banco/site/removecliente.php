<?php
 $query= "DELETE FROM clientes 
          WHERE id_cliente = {$_GET['id']}";
 
 if(!mysql_query($query,$conexao)){
    echo "Erro ao remover o cliente!!<br>";
    echo mysql_error();
 }else{
       echo "Cliente removido com sucesso!";
 }
?>