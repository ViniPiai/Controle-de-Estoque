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
$rg=$_POST['rg'];
$numero=$_POST['num'];
$rua=$_POST['rua'];
$bairro=$_POST['bar'];
$cidade=$_POST['cid'];
$estado=$_POST['est'];
echo "<header class='header'><h1>Dados finais</h1></header>";
echo "<ul>";
echo "<li><a class='active' href='index.html'>Home</a></li>";
echo "<li><a href=''>Controle de estoque</a></li>";
echo "<li><a href='#contact'>Contact</a></li>";
echo "<li><a href='#about'>About</a></li>";
echo "</ul>";
echo "<center><br>$nome<br>";
echo "$numero<br>";
echo "$rua<br>";
echo "$cidade<br>";
echo "$bairro<br>";
echo "$estado<br></center>";

$conectando=mysqli_connect('localhost','root','','controleEstoque') or die ('DEU RUIM!!');
$SQL=("Insert into sala(nome, num, rua, bar, cid, est) Values ('$nome','$numero','$rua','$bairro','$cidade','$estado')");
mysqli_query($conectando,$SQL);
mysqli_close($conectando);

echo "<center><a href=index.html>Voltar</a></center>"

?>

</html>
