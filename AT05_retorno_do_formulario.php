<?php
include 'AT06_header.php';
session_start();
if(!isset($_SESSION['logado'])){
    header('Location: restrict.php');
}

echo "<div class='tabela-container'>
<div class='divcadastro'>
    <a href='AT06_consulta.php' class='botaocadastro'>Voltar</a>
</div>
<div class='formularios'>";

if(mysqli_connect_errno($conn)){
    echo "<h2>Erro ao tentar se conectar com o banco de dados! Erro: ".mysqli_connect_error()."</h2>";
}

else{
    //cadastro manual dos 
    if(isset($_POST['cad'])){
        $sql = "INSERT INTO db_clientes(nome,endereco,bairro,cidade,estado,telCel) VALUES('$_POST[nome]','$_POST[endereco]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[telcel]')";

        if(mysqli_query($conn,$sql)){
            echo "<h2>Cliente cadastrado com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao inserir cliente! Erro: ".mysqli_error($conn)."</h2>";
        }
    }

    elseif(isset($_POST['cad1'])){

        $sql1 = "INSERT INTO db_funcionarios(nomeFunc,loginFunc,senhaFunc) VALUES('$_POST[nome]','$_POST[login]','$_POST[senha]')";

        if(mysqli_query($conn,$sql1)){
            echo "<h2>Funcionario cadastrado com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao inserir funcionário! Erro: ".mysqli_error($conn)."</h2>";
        }
    }
    mysqli_close($conn);
}

?>

