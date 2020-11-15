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
<div class="divcadastro">
    <a href="index.php" class="botaocadastro">Voltar</a>
</div>
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
        PRIMARY KEY(codigo));";

    if(mysqli_query($conexao2,$tabela)){
        echo "<p>tabela de clientes criada com sucesso! </p>";

        $tabela2 = "CREATE TABLE db_funcionarios(
            codFunc int not null auto_increment,
            nomeFunc varchar(50) not null,
            loginFunc varchar(30) unique,
            senhaFunc varchar(40) not null,
            primary key (codFunc))";

        if(mysqli_query($conexao2,$tabela2)){
            echo "<p>tabela funcionarios criada com sucesso!";
            $sql3 = "INSERT INTO db_funcionarios (nomeFunc,loginFunc,senhaFunc) VALUES('Administrador','admin','etecia')";
            if(mysqli_query($conexao2,$sql3)){
                echo "<p>Usuario Administrador criado login \"admin\" senha \"etecia\"!</p>";
            }
            else{
                echo "<p>Problema ao adicionar um administrador teste!".mysqli_error($conexao2)."</p>";
            }
        }
        else{
            echo "<p>tabela funcionarios não criada".mysqli_error($conexao2)."</p>";
        }
    }
    else{
        echo "<p>erro ao criar tabela clientes ".mysqli_error($conexao2)."</p>";
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