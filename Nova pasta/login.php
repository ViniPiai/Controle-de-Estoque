<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/w3css/3/s3.css">
	<title>Página de verificação do cadastro </title>
</head>
<?php
	$nome=$_POST['nome'];
	$senha=$_POST['senha'];
	$logar=$_POST['logar'];
	$conectando=mysqli_connect('localhost','root','','controleEstoque') or die ('DEU RUIM!!');
	$SQL = mysql_select_db('controleEstoque');

if(isset($ENVIAR)){
	$verificar = mysqli_query("select * from cadastro where nome = '$nome' and senha = '$senha' "); 
}
if($nome == null && $senha == null){
	header ("location:http://localhost/ControleEstoque/cadastroPessoa.html");
}if($verificar != $nome && $senha){
	header ("location:http://localhost/ControleEstoque/cadastrarProduto.html");
}

echo "<header class='header'><h1>Controle de estoque</h1></header>";
	echo "<ul>";
	echo "<li><a class='active' href='index.html'>Home</a></li>";
	echo "<li><a href=''>Controle de estoque</a></li>";
	echo "<li><a href='#contact'>Contact</a></li>";
	echo "<li><a href='#about'>About</a></li>";
	echo "</ul>";
	echo "<center><br>$nome<br>";
echo "<br><a href=consulta.php>Consulta</a></center>"

?>

</html>