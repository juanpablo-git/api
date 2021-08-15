<?php
//<input type="text" value="<?php echo $_POST['setor'] ">
?>
<html>
    <form action="http://localhost/api/api/update.php" method="post">
    id <input type="number" name="id" value="<?php echo $_POST['id'] ?>"  readonly > <br>
    nome <input type="text" name="nome" value="<?php echo $_POST['nome']?>"> <br>
    setor <input type="text" name="setor" value="<?php echo $_POST['setor']?>">
    <input type="submit" value="Editar">
    </form>
</html>

