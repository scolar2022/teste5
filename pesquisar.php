<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="pesquisar.php">
		Nome do Cliente: <input type="text" name="nomecli" maxlength="50" placeholder="digite o nome">
		<input type="submit" value="pesquisar" name="botao">
	</form>

	<?php 
		if(isset($_POST["botao"])){
			require("conecta.php");
			$nomecli=htmlentities($_POST["nomecli"]);

			// gravando dados
			$query = $mysqli->query("select * from tb_clientes where nomecli like '%$nomecli%'");
			echo $mysqli->error;

			echo "
				<table border='1' width='400'>
				<tr>
					<th>ID</th>
					<th>CPF</th>
					<th>Nome do Cliente</th>
					
				</tr>
			";
			while ($tabela=$query->fetch_assoc()) {
				echo "
				<tr>
				<td align='center'>$tabela[idcli]</td>
				<td align='center'>$tabela[cpfcli]</td>
				<td align='center'>$tabela[nomecli]</td>
				</tr>
			";
		}
		echo "</table>";
		}
	?>
	<a href='index2.php'> Voltar</a>
</body>
</html>