<?php 

$local="localhost";
$user="root";
$pass="";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação do banco de dados</title>
    <link rel="stylesheet" href='stilo.css'>
</head>
<?php
$conexao = mysqli_connect($local,$user,$pass);

    if (mysqli_connect_errno($conexao)){
        echo "<h2></br>Erro ao conectar com a base de dados! erro:".mysqli_connect_errno()."</h2>";
    }
    else{
        $sql="CREATE DATABASE db_livraria";
        if (mysqli_query($conexao,$sql)){
            echo "<h2></br>Base de Dados criada com sucesso!</h2>";
        }
        else{
            echo "<h2></br>Erro na criação do banco de dados!  Erro: ".mysqli_error($conexao)."</h2>";
        }
    }
    mysqli_close($conexao);
    
?>