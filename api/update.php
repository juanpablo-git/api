<?php
require "conect.php";
$put = $_POST['nome'];
$id =$_POST['id'];
$setor = $_POST['setor'];

$pdo->query("update funcionario set nome ='$put' setor = '$setor' where id=$id ");

if($put != ""){
    echo $put;

}


