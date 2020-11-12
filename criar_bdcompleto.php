<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Criação do banco de dados</title>
</head>
<body>
<div class="tb-container">
<div class="" style="background-color: #fff;">
<?php 

$localhost = 'localhost';
$user_name = 'root';
$senha = "";

$conexao = mysqli_connect($localhost,$user_name,$senha);
$drop = "DROP DATABASE db_livraria";

    if (mysqli_query($conexao,$drop)){
        echo "<p>Banco de dados removido com sucesso! </p>";
    }
    else{
        echo "<p> </p>";
    }
    
    $create = "CREATE DATABASE db_livraria";

    if(mysqli_query($conexao,$create)){
        echo "<p>Banco de dados criado com sucesso! </p>";

        $bd = "db_livraria";
        $conexao2 = mysqli_connect($localhost,$user_name,$senha,$bd);
        $tabela = "CREATE TABLE db_clientes(
            nome VARCHAR(100),
            endereco VARCHAR(100),
            bairro VARCHAR(100),
            cidade VARCHAR(50),
            estado VARCHAR(2),
            telCel VARCHAR(15),
            codigo INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(codigo))";

        if(mysqli_query($conexao2,$tabela)){
            echo "<p>tabela criada com sucesso! </p>";
        }
        else{
            echo "<p>erro ao criar tabela ".mysqli_error($conexao)."</p>";
        }
    }
    else{
        echo "<p>erro: ".mysqli_error($conexao)."</p>";
    }
    mysqli_close($conexao);
?>
</div>
</div>
</body>
</html>