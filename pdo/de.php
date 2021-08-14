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


    // ---- insert ------
/*$res = $pdo->prepare("INSERT INTO funcionario(nome,id) VALUES (:n,:p)");
$res->bindValue(":n","nome");
$res->execute();

//$nome = "mirian";
//$res->bindParam(":n",$nome);// só aceita variável
$res->bindValue(":n","nome"));
*/
/*
$pdo->query("INSERT INTO funcionario(nome,id) VALUES ('galego',2)");
*/
// -----------DELETE----------------------
//$pdo->query("DELETE  FROM funcionario where id='3' ");
//--------------UPDATE----------------
//$pdo->query("UPDATE funcionario SET nome = 'raimundo' where id= '2' ");
//-----------------SELECT-----------------------

    $queri = $pdo->prepare("SELECT nome FROM funcionario  ");
    $queri->execute();
    $array = $queri->fetchAll(PDO::FETCH_ASSOC);

   echo json_encode($array);
   echo $_POST['nome'];



?>
   <form action="insert.php" method="post">
   <input type="text" name="nome" id="">
   <input type="submit" value="enviaar">
   </form>

