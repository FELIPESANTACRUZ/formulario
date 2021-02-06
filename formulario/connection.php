<?php

//credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'estudandophppdo');

try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';',USER, PASS);
    echo "OKKKKK";
} catch (PDOException $ex) {

    echo  'Erro' . $ex->getMessage();
}



