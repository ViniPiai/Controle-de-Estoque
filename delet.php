<?php

$idDeletado = $_GET['id'];


$conectado=mysqli_connect('localhost','root','','controleEstoque') or die ('Deu erro!');

$sql="DELETE from produto WHERE produto.id = $idDeletado";
$resultado=mysqli_query($conectado,$sql);

$sql="DELETE from estoque WHERE estoque.id = $idDeletado";
$resultado=mysqli_query($conectado,$sql);

if($resultado)
	echo"Tabela excluida com sucesso!";
else
	echo"Errou ao excluir tabela!";



mysqli_close($conectado);

header("location: http://localhost/ControleEstoque/consulta.php")

?>