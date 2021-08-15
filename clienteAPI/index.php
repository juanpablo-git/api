<?php
$url = "http://localhost/api/api/select.php";
$pokemons = file_get_contents($url);
$dados = json_decode($pokemons,true);
//var_dump($dados);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    </head>
    <button class="w3-button w3-green"><a href="cadastrar.php"> Cadastrar </a></button>
    <div class="w3-responsive">
  <table class="w3-table-all">
  <tr class="w3-red">
        <th>#</th>
        <th>Name</th>
        <th>Setor</th>
        <th>Editar</th>
    </tr>
    <?php 
    foreach ($dados as $key => $value) {
    ?>
    <tr>
      <form action="update.php" method="post">
        <td><input type="text" name="id" value="<?php echo $dados[$key]['id'] ; ?>" readonly></td>
        <td><input type="text" name="nome" value="<?php echo $dados[$key]['nome'] ; ?>" readonly></td>
        <td><input type="text" name="setor" value="<?php echo $dados[$key]['nome_setor'] ; ?>" readonly></td>
        <td><a href="update.php"><button style="font-size:24px"><i class="fa fa-pencil"></i></button></a></td>
        </form>
    </tr>

    <?php } ?>

  </table>
</div>
</html>