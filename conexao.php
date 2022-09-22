<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'ValenteGeorge75');
define('DB', 'reciclideia');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível estabelecer uma conexão');