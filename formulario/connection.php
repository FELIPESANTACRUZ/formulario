<?php
//credenciais de acesso ao BD
define('DSN', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'estudandophppdo');

try {

    $conn = new PDO('mysql:host=' . DSN . ';dbname=' . DBNAME . ';',USER, PASS);
} catch (PDOException $ex) {

    echo  'Erro' . $ex->getMessage();
}
