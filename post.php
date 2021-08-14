<?php
require "conect.php";
//echo "pagina de create";
$nome= $_POST['nome']??"";
$setor = $_POST['setor']??"";
try{
if ($nome != ''){
    $pdo->query("insert into funcionario(nome,setor) values ('$nome',$setor)");
    echo "o $nome acabou de ser inserido no banco";
    header("Location:http://localhost/clienteAPI/index.php");  
}
}catch(Exception $erro) {
    echo "erro na inserção verifique se você colocou todos os valores";
}