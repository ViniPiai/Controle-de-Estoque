<!DOCTYPE>
<html>

<head>
	
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<title>Controle de Estoque</title>

	
</head>

	<header class="header">
	
	<h1>Cadastro de produtos</h1>

</header>	
<ul>
  <li><a class="active" href="cadastroProduto.php">Home</a></li>
  <li><a href="">Controle de estoque</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>



<body class="body" >

	<?php 

		$nome = $_POST['nomeProduto'];
		$lote = $_POST['lote'];
		$quant = $_POST['quant'];
		$validade = $_POST['validade'];
		$cadastro = $_POST['cadastro'];
		
		$connect = mysqli_connect('localhost','root','','controleEstoque') or die("Erro");
		$sql_produto = ("insert into produto(nome, dataDeCadastro) values ('$nome', '$cadastro')");
		mysqli_query($connect, $sql_produto);
		$sql_estoque = ("insert into estoque(lote, quantidade, data_validade) values ('$lote', '$quant', '$validade')");
		mysqli_query($connect, $sql_estoque);

		header ("location:http://localhost/ControleEstoque/cadastrarProduto.html");	
		mysqli_close($connect);

		
 	?>



</body>

<footer class="footer">	
	Bruno Anderson de Jesus<br> 
	Leonardo Vinicius da Silva<br>
	Marcos Antônio Ramos Dias<br>
	Vinicius de Aquino Piai


</footer>

</html>



