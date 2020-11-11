<?php 

$localhost = 'localhost';
$user_name = 'root';
$senha = "";

$conexao = mysqli_connect($localhost,$user_name,$senha);
$sql="DROP DATABASE db_livraria";
    if (mysqli_query($conexao,$sql)){
        echo "</br>Banco de dados removido com sucesso! ";
    }
    else{
        echo "</br>Erro: ".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    
?>