<?php 
 include 'AT06_header.php';


$sql = "CREATE TABLE db_clientes(
    nome VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    telCel VARCHAR(15),
    codigo INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(codigo))";

if (mysqli_query($conn,$sql)){
    echo "<h2>Tabela criada com sucesso!</h2>";
}
else{
    echo "<h2>Erro: ".mysqli_error($conn)."</h2>";
}
mysqli_close($conn);
    
?>

