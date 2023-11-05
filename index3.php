<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Produtos </title>
</head>
<body>
	<center>
	<h2>Cadastro de Produtos</h2><br>
	<a href="adicionar2.php"><button>Adicionar Produto</button></a>
	<a href="pesquisar2.php"><button>Pesquisar</button></a>


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
			<th>Produto</th>
			<th>Preço</th>
			<th>Cor</th>	
			<th>Ação</th>
		</tr>

		
		<?php 
		// conexao com o banco de dados
		require("conecta2.php");
		
		// executar comandos sql
		// consulta registros da tabela
		$query = $mysqli->query("select * from tb_produtos");
		echo $mysqli->error;

		// carrega consulta de registros
		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[idpro]</td>
			<td align='center'>$tabela[produto]</td>
			<td align='center'>$tabela[preco]</td>
			<td align='center'>$tabela[cor]</td>

			
			<td width='120'><a href='excluir2.php?excluir=$tabela[idpro]'>[excluir]</a>
			
			<a href='alterar2.php?alterar=$tabela[idpro]'>[alterar]</a></td>
			</tr>
			";
		}
		?>
	</table><br><br>
</center>
</body>
</html>