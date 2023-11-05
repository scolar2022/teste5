<?php 
	require("conecta.php");
	$cpfcli="";
	$nomecli="";
	

	if(isset($_GET["alterar"])){
		$idcli = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from tb_clientes where idcli = '$idcli'");
		$tabela=$query->fetch_assoc();
		$cpfcli=$tabela["cpfcli"];
		$nomecli=$tabela["nomecli"];	
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Altere as inforamções</h2><br>
	<form method="POST" action="alterar.php">
		<input type="hidden" name="idcli" value="<?php echo $idcli ?>">
		
		CPF: <input type="text" name="cpfcli" value="<?php echo $cpfcli ?>"><br/><br/>	
		Nome: <input type="text" name="nomecli" value="<?php echo $nomecli ?>"><br><br>

		<input type="submit" value="Salvar" name="botao"><br><br>

	</form>
	<a href ="index2.php"> Voltar </a>
	<br />
</body>
</html>


<?php 
	if(isset($_POST["botao"])){

		$idcli=htmlentities($_POST["idcli"]);
		$cpfcli=htmlentities($_POST["cpfcli"]);
		$nomecli=htmlentities($_POST["nomecli"]);
		

		$mysqli->query("update tb_clientes set cpfcli = '$cpfcli', nomecli='$nomecli' where idcli = '$idcli'  ");
		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "Alterado com sucesso";
		}
	}
?>