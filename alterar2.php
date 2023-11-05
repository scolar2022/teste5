<?php 
	require("conecta2.php");
	$produto="";
	$preco=""; 
	$cor="";

	
	

	if(isset($_GET["alterar"])){
		$idpro = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from tb_produtos where idpro = '$idpro'");
		$tabela=$query->fetch_assoc();
		$produto=$tabela["produto"];
		$preco=$tabela["preco"];
		$cor=$tabela["cor"];

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>Altere as inforamções</h2><br>
	<form method="POST" action="alterar2.php">
		<input type="hidden" name="idpro" value="<?php echo $idpro ?>">
		
		Nome: <input type="text" name="produto" value="<?php echo $produto ?>"><br><br>
		Preco: <input type="text" name="preco" value="<?php echo $preco ?>"><br/><br/>	
		Cor: <input type="text" name="cor" value="<?php echo $cor ?>">
		<br/><br/><br>	
		

		<input type="submit" value="Salvar" name="botao"><br><br>

	</form>
	<a href ="index3.php"> Voltar </a>
	<br />
</body>
</html>


<?php 
	if(isset($_POST["botao"])){

		$idpro=htmlentities($_POST["idpro"]);
		$produto=htmlentities($_POST["produto"]);
		$preco=htmlentities($_POST["preco"]);
		$cor=htmlentities($_POST["cor"]);
		

		$mysqli->query("update tb_produtos set produto='$produto', preco='$preco', cor= '$cor' where idpro = '$idpro'  ");
		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "Alterado com sucesso";
		}
	}
?>