<?php
 $query = "SELECT * 
           FROM clientes 
           WHERE id_cliente = {$_GET['id']}";
 $result= mysql_query($query,$conexao);
 $dado  = mysql_fetch_array($result);
 
?>
<form action="principal.php?t=salvaeditacliente.php" method="POST"> 
 <input type="hidden" name="id" value="<?php echo $dado['id_cliente']?>">
 Nome: <input type="text" name="nome" value="<?php echo $dado['nome']?>"><br>
 Endereço: <input type="text" name="endereco" value="<?php echo $dado['endereco']?>"><br>
 Data nascimento:
 <input type="text" name="nascimento" value="<?php echo $dado['data_nascimento']?>"> AAAA-MM-DD<br>
 Sexo: <input type="radio" name="sexo" value="M" <?php if($dado['sexo'] == 'M'){echo "checked";}?>>Masculino
       <input type="radio" name="sexo" value="F" <?php if($dado['sexo'] == 'F'){echo "checked";}?>>Feminino
 <br><br>

 <input type="submit" value="Alterar">
</form>