<?php
require "conect.php";
    $queri = $pdo->prepare("SELECT * FROM funcionario JOIN setor ON setor.id_setor = funcionario.setor");
    $queri->execute();
    $array = $queri->fetchAll(PDO::FETCH_ASSOC);
 echo json_encode($array);
