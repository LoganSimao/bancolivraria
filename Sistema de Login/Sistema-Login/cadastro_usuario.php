<?php

	$localhost = 'localhost';
	$user_name = 'root';
	$user_senha = "";
	$db = "dbUsuarios";

		$con = mysqli_connect($localhost,$user_name,$user_senha,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{
	
			$sql = "INSERT INTO tbUsuarios(nomeUsu,loginUsu,senhaUsu)VALUES('$_POST[nome]','$_POST[login]','$_POST[senha]')";
	
		if(mysqli_query($con,$sql)){
	
			echo "Usuário inserido com sucesso!!!";
	
		}else{
	
			echo "Erro ao inserir usuário: ".mysqli_error($con);
	
		}
	
		mysqli_close($con);
	}
?>
