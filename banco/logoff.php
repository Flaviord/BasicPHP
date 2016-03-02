<?php
session_name('sistema');
session_start();

//mata a sessão
session_destroy();

//metodo 1 para eliminar as variaveis de sessão
session_unset();

//metodo 2 para eliminar as variaveis de sessão
$_SESSION=array();

header('location:index.php')



?>
