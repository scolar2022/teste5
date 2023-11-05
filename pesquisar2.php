<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisar2.php">
		Nome do Produto: <input type="text" name="produto" maxlength="50" placeholder="digite o nome">
		<input type="submit" value="pesquisar" name="botao">
	</form><br>

	<?php 
		if(isset($_POST["botao"])){
			require("conecta2.php");
			$produto=htmlentities($_POST["produto"]);

			// gravando dados
			$query = $mysqli->query("select * from tb_produtos where produto like '%$produto%'");
			echo $mysqli->error;

			echo "
				<table border='1' width='400'>
				<tr>
					<th>ID</th>
					<th>Nome do Produto</th>
					<th>Preço</th>
					<th>Cor</th>

				</tr>
			";
			while ($tabela=$query->fetch_assoc()) {
				echo "
				<tr>
				<td align='center'>$tabela[idpro]</td>
				<td align='center'>$tabela[produto]</td>
				<td align='center'>$tabela[preco]</td>
				<td align='center'>$tabela[cor]</td>
				</tr>
			";
		}
		echo "</table>";
		}
	?>
	<br><br>
	<a href='index3.php'> Voltar</a>
</body>
</html>