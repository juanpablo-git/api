<?php
require "conect.php";

$nome = $_POST['nome'];
$id =$_POST['id'];
$setor = $_POST['setor'];
if($setor ==="financeiro"){
    $idSetor = 1;
}elseif($setor ==="ti"){
    $idSetor = 2;
}elseif($setor ==="cozinha"){
    $idSetor=3;
}

$pdo->query("update `funcionario` set `nome`='$nome',`setor`=$idSetor where `id` = $id ");

echo "O usuário $nome acabou de ser atualizaddo" ;

