<?php
require "conect.php";
$put = $_POST['nome'];
$put1 =$_POST['id'];

$pdo->query("UPDATE funcionario SET nome ='$put' where id='$put1' ");

if($put != ""){
    echo $put;

}


