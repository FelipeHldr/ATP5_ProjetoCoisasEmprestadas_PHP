<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if(empty($id)){
	
		$sql = "INSERT INTO usuarios (nome, email, senha) 
					VALUES 
				('$nome', '$email', '$senha')";
		
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE usuarios SET
					nome = '$nome',
					email = '$email',
					senha = '$senha'
				WHERE
					id = $id";
					
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>