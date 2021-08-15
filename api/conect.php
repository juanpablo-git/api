<?php
// --conexão -----
$userName = "root";
$senha = "";

try{
    $pdo = new PDO("mysql:dbname=pdo;host:localhost",$userName,$senha);
}
catch(Exception $e){
    echo "erro no banco";
}