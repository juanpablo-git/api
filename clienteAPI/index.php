<?php
$url = "http://localhost/pdo/select.php";
$pokemons = file_get_contents($url);
$dados = json_decode($pokemons,true);
//var_dump($dados);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    </head>
    <button class="w3-button w3-green"><a href="cadastrar.php"> Cadastrar </a></button>
    <div class="w3-responsive">
  <table class="w3-table-all">
  <tr class="w3-red">
        <th>#</th>
        <th>Name</th>
        <th>Setor</th>
    </tr>
    <?php 
    foreach ($dados as $key => $value) {
    ?>
    <tr>
        <td><?php echo $dados[$key]["id"] ; ?></td>
        <td><?php echo $dados[$key]['nome'] ; ?></td>
        <td><?php echo $dados[$key]['nome_setor'] ; ?></td>
    </tr>

    <?php } ?>

  </table>
</div>
</html>