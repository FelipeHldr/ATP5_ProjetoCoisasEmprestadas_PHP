<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$condicao = $_POST['condicao'];

	if(empty($id)){

		$sql = "INSERT INTO produtos (nome, descricao, condicao) VALUES ('$nome', '$descricao', '$condicao')";

		$res = mysqli_query($conn, $sql);

		if($res){
			header("Location: listaprodutos.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
	}
	else{

		$sql = "UPDATE produtos SET
					nome = '$nome', 
					descricao = '$descricao', 
					condicao = '$condicao', 
				WHERE
					id = $id";

		$res = mysqli_query($conn, $sql);

		if($res){
			header("Location: listaprodutos.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
	}
?>