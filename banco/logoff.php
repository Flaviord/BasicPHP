<?php
session_name('sistema');
session_start();

//mata a sess�o
session_destroy();

//metodo 1 para eliminar as variaveis de sess�o
session_unset();

//metodo 2 para eliminar as variaveis de sess�o
$_SESSION=array();

header('location:index.php')



?>
