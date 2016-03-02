<?php
 //monta a consulta sql
 $query= "INSERT INTO clientes (nome,
                                endereco,
                                data_nascimento,
                                sexo)
          VALUES('{$_POST['nome']}',
                 '{$_POST['endereco']}',
                 '{$_POST['nascimento']}',
                 '{$_POST['sexo']}')";

 //envia a consulta para o banco de dados
 if(!mysql_query($query,$conexao)){
    //mensagem de erro
    echo mysql_error();
 }else{
       echo "Cliente cadastrado com sucesso";
 }

?>





