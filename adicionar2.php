<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Produto</title>
</head>
<body>
	<h2> Preencha os dados para salvar no banco </h2><br>
	<form method="POST" action="adicionar2.php">
		Nome do Produto: <input type="text" name="produto" maxlength="50" placeholder="digite o Nome"><br>
		Preço: <input type="text" name="preco" maxlength="20" placeholder="digite o Preço"><br/>
		Cor: <input type="text" name="cor" maxlength="20" placeholder="digite a Cor">		
		<br/><br>
			
		<input type="submit" value="salvar" name="botao">
	</form>

</body>
</html>

<?php 
	if(isset($_POST["botao"])){
		require("conecta2.php");

		//$nome=$_POST["nome"];
		$produto=htmlentities($_POST["produto"]);
		$preco=htmlentities($_POST["preco"]);
		$cor=htmlentities($_POST["cor"]);

		// gravando dados
		$mysqli->query("insert into tb_produtos values('', '$produto', '$preco', '$cor')");
		echo $mysqli->error;

		if($mysqli->error == ""){
			echo "<br />Inserido com sucesso<br /></br />";
			echo "<a href='index3.php'> Voltar</a>";
		}

	}
?>