<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Cadastro </title>
</head>
<body>
	<center>
	<h2>Cadastro de Clientes</h2><br>
	<a href="adicionar.php"><button>Adicionar Cliente</button></a>
	<a href="pesquisar.php"><button>Pesquisar</button></a>
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="relatorio/relatorio1.php"><button>Relatório 1</button></a>	
	<a href="relatorio/relatorio2.php"><button>Relatório 2</button></a>
	<a href="relatorio/relatorio3.php"><button>Relatório 3</button></a>	
	<a href="relatorio/relatorio4.php"><button>Relatório 4</button></a>
	<a href="relatorio/relatorio5.php"><button>Relatório 5</button></a>


	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="index1.php"><button>Voltar para o Menu</button></a>			
				
	&nbsp&nbsp
	<a href="index.php"><button>Sair</button></a>
	<br /><br>


	<table border="1" width="400">
		<tr>
			<th>Id</th>
			<th>CPF</th>
			<th>Nome</th>
			<th>Ação</th>
		</tr>

		
		<?php 
		// conexao com o banco de dados
		require("conecta.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from tb_clientes");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[idcli]</td>
			<td align='center'>$tabela[cpfcli]</td>
			<td align='center'>$tabela[nomecli]</td>
			
		
			<td width='120'><a href='excluir.php?excluir=$tabela[idcli]'>[excluir]</a>
			
			<a href='alterar.php?alterar=$tabela[idcli]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table><br><br>
</center>
</body>
</html>