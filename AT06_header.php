<?php
//conexao com o banco de dados db_livraria
$local = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_livraria';

$conn = mysqli_connect($local,$user,$pass,$db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta no banco de dados</title>
    <link rel="stylesheet" href='stilo.css'>
</head>
<body>