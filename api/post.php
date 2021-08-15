<?php
require "conect.php";
//echo "pagina de create";
$nome= $_POST['nome']??"";
$setor = $_POST['setor']??"";
try{
if ($nome != ''){
    $pdo->query("insert into funcionario(nome,setor) values ('$nome',$setor)");
    echo "o $nome acabou de ser inserido no banco <br>";
    echo "volte para a <a href='http://localhost/api/clienteAPI/'>pagina inicial";
}
}catch(Exception $erro) {
    echo "erro na inserção verifique se você colocou todos os valores";
}