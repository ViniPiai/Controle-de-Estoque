<?php
				$con = mysqli_connect('localhost','root','','controleEstoque');

				$id = $_POST['id'];
				$nomeProdutoAtualizado = $_POST['produto'];
				$loteAtualizado = $_POST['lote'];
				$quantidadeAtualizado = $_POST['quant'];
				$validadeAtualizado = $_POST['validade'];
				$cadastroAtualizado = $_POST['cadastro'];

				$sql_produto = ("update produto set nome='$nomeProdutoAtualizado', dataDeCadastro = '$cadastroAtualizado' where id=".$id);
				echo "$sql_produto";
				mysqli_query($con, $sql_produto);

				$sql_estoque = ("update estoque set lote = $loteAtualizado, quantidade = $quantidadeAtualizado, data_validade = '$cadastroAtualizado' where id=".$id);
				echo "$sql_estoque";
				mysqli_query($con, $sql_estoque);

				

			header("location:http://localhost/ControleEstoque/consulta.php");
?>