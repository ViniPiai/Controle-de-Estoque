<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<title>Controle de Estoque</title>


</head>

<header class="header">
	
	<h1>Cadastro de produtos</h1>
	

	</header>	
	<ul>
	  <li><a class="active" href="cadastroProduto.php">Cadastar</a></li>
	  <li><a href="consulta.php">Controle de estoque</a></li>
	  <li><a href="fornecedor.html">Fornecedor</a></li>
	</ul>

<body class="body">

	
<?php
	echo "<div class=w3-row>";
	  	echo "<div class=w3-col m3 w3-center><p></p></div>";
	  	echo "<div class=w3-col m6 w3-center>";
	  	
		echo "<center><form method=POST action=cadastrarProduto.php class=w3-container w3-center style=margin-bottom:50px>";
				
				echo "<div class=div-form >";
					
					echo "<label><b>Nome do produto</b></label><br>";
					echo "<input type=text required=required name=nomeProdutoclass=input input-size><br>";

					
					echo "<label><b>Lote do produto</b></label><br>";
					echo "<input type=number required=required name=lote class=input input-size><br>";

					
					echo "<label><b>Quantidade do produto</b></label><br>";
					echo "<input type=number required=required name=quant class=input input-size><br>";

					
					echo "<label><b>Data de validade</b></label><br>";
					echo "<input type=date required=required maxlength=10 name=validade class=input input-size 
					pattern=[0-9]{2}\/[0-9]{2}\/[0-9]{4}$ min=2012-01-01 max=2014-02-18/><br>";

					
					echo "<label><b>Data de cadastro</b></label><br>";
					echo "<input type=date required=required maxlength=10 name=cadastro class=input input-size
					pattern=[0-9]{2}\/[0-9]{2}\/[0-9]{4}$ min=2017-01-01 max=2018-12-31/><br>";

					// echo "<label><b>Data de cadastro</b></label><br>";
					// echo "<select>";
						
					

					// 	$connect = mysqli_connect('localhost','root','','controleEstoque') or die("Erro");
					// 	$SQL = "select * from fornecedor";
					// 	$resultado = mysqli_query($connect, $SQL);
					// 	while ($registro = mysqli_fetch_array($resultado)) {
					// 		$fornecedor = $registro['nome'];

					// 		echo "<option>$fornecedor</option>";
					// 	}

					


					// echo "</select>";


				echo "</div>";

				echo "<br><input class=w3-button w3-green type=submit value=Enviar style=margin-bottom:20px>";
		
			echo "</form><center>";
?>
	  	</div>
	  <div class="w3-col m3  w3-center"><p></p></div>
	</div>



</body>

<footer class="footer" >	
	Bruno Anderson de Jesus<br> 
	Leonardo Vinicius da Silva<br>
	Marcos Antônio Ramos Dias<br>
	Vinicius de Aquino Piai


</footer>
</html>

