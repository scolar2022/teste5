<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Cliente</title>
</head>
<body>
	<h2> Preencha os dados para salvar no banco </h2><br>
	<form method="POST" action="adicionar.php">
		CPF: <input type="text" name="cpfcli" maxlength="20" placeholder="digite o CPF"><br/>
		Nome do Cliente: <input type="text" name="nomecli" maxlength="50" placeholder="digite o nome"><br>
				
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
	if(isset($_POST["botao"])){
		require("conecta.php");

		//$nome=$_POST["nome"];
		$cpfcli=htmlentities($_POST["cpfcli"]);
		$nomecli=htmlentities($_POST["nomecli"]);
		

		// gravando dados
		$mysqli->query("insert into tb_clientes values('', '$cpfcli', '$nomecli')");
		echo $mysqli->error;

		if($mysqli->error == ""){
			echo "<br />Inserido com sucesso<br /></br />";
			echo "<a href='index2.php'> Voltar</a>";
		}

	}
?>