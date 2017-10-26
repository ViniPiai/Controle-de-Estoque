<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<title>Controle de Estoque</title>
	
</head>

<header class="header">
	
	<h1>Controle de estoque</h1>
	

	</header>	
	<ul>
	  <li><a class="active" href="cadastroProduto.php" style="text-decoration: none">Cadastar</a></li>
	  <li><a href="consulta.php" style="text-decoration: none">Controle de estoque</a></li>
	  <li><a href="fornecedor.html " style="text-decoration: none">Fornecedor</a></li>
	</ul>

<body class="body">

	<style >
		table {
	    border-collapse: collapse;
	    width: 100%;
		}

		

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
	</style>

	<?php
		
		echo "<table border=1>";
		echo "<tr>";
		echo "<th><center> ID </center></th>";
		echo "<th><center> NOME PRODUTO </center></th>";
		echo "<th><center> QUANTIDADE </center></th>";
		echo "<th><center> DATA DE VALIDADE </center></th>";
		echo "<th><center> DATA DE CADASTRO </center></th>";
		echo "<th><center> LOTE </center></th>";
		echo "<th><center> EDITAR </center></th>";
		echo "<th><center> EXCLUIR </center></th>";
		echo "</tr>";

		$contador=0;
		$conectado=mysqli_connect('localhost','root','','controleEstoque') or die ('Deu erro!');
		$sql="select * from produto , estoque where produto.id = estoque.id;";
		$resultado=mysqli_query($conectado,$sql);
		while ($registro=mysqli_fetch_array($resultado))
		{
			$contador=$contador+1;
			$idc =$registro['id'];
			$nomec=$registro['nome'];
			$quantidadec=$registro['quantidade'];
			$data_validadec=$registro['data_validade'];
			$dataDeCadastroc=$registro['dataDeCadastro'];
			$lotec=$registro['lote'];
			echo "<h1>";
			echo "<tr>";
			echo "<th class='w3-white'><center>$contador</center></th>";
			echo "<th class='w3-white'><center>$nomec</center></th>";
			echo "<th class='w3-white'><center>$quantidadec</center></th>";
			echo "<th class='w3-white'><center>$data_validadec</center></th>";
			echo "<th class='w3-white'><center>$dataDeCadastroc</center></th>";
			echo "<th class='w3-white'><center>$lotec</center></th>";
			echo "<th class='w3-white'><center><a href='atualizar.php?id=$idc'><i class='glyphicon glyphicon-refresh'></i></a></center></th>";
			echo "<th class='w3-white'><center><a href='delet.php?id=$idc'><i class='glyphicon glyphicon-trash'></i></a></center></th>";
			echo "</tr>";
			echo "</h1>";

		}
		echo "</table>";

	?>



</body>

<footer class="footer">	
	Bruno Anderson de Jesus<br> 
	Leonardo Vinicius da Silva<br>
	Marcos Antônio Ramos Dias<br>
	Vinicius de Aquino Piai


</footer>
</html>













