<?php

	$nomeFornecedor = $_POST ['txtFornecedor'];
	$cnpjFornecedor = $_POST ['txtCNPJ'];

	$con  = mysqli_connect('localhost','root','','controleEstoque') or die("Error");
	$sql = ("insert into fornecedor(nomeFornecedor, cnpj) values ('$nomeFornecedor', '$cnpjFornecedor')");
	mysqli_query ($con, $sql);
	mysqli_close ($con);

	header("location: http://localhost/ControleEstoque/cadastrarProduto.html")

?>

