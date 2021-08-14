<?php
$url = "http://localhost/pdo/select.php";
$pokemons = json_decode(file_get_contents($url),true);
var_dump($pokemons);