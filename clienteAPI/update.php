<?php
echo "{$_POST['nome']} é do setor {$_POST['setor']}" ;
//<input type="text" value="<?php echo $_POST['setor'] ">

?>
<html>
    <form action="http://localhost/api/api/update.php" method="post">
    id <input type="text" value="<?php echo $_POST['id'] ?>"  readonly > <br>
    nome <input type="text" value="<?php echo $_POST['nome']?>"> <br>
    setor <select name="setor">
        <option>
        <option name="setor" value="1">financeiro</option>
        <option name="setor" value="2">ti</option>
        <option name="setor" value="3">cozinha</option>
        </option>
    </select>
    <input type="submit" value="Editar">
    </form>
</html>

