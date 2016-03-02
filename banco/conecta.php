<?php
 //conecta no mysql
 $conexao= mysql_connect('localhost','','')
           or die('Erro ao conectar no MySQL');

 //escolhe a base de dados para uso
 mysql_select_db('3nc',$conexao) or die('Erro na base');
?>