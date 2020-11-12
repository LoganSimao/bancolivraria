<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Cadastro Livraria</title>
</head>
<body>
<div class="tb-container">
<div class="divcadastro">
<a href="AT05_formulario.php" class="botaocadastro">Cadastrar</a>
</div>
<div class="formularios">
<div class="form4">
    <h1>Consulta</h1>
    <div class="con">
    <!-- formulario para consulta no "Avançado"-->
    <form name="cadastro" method="GET" action="AT05_retornoFormularioConsulta.php">

        <p><input type="checkbox" name="nome" value="name"> Nome</p>

        <p><input type="checkbox" name="endereco" value="endereco"> Endereço</p>

        <p><input type="checkbox" name="bairro" value="bairro"> Bairro</p>

        <p><input type="checkbox" name="cidade" value="cidade"> Cidade</p>

        <p><input type="checkbox" name="estado" value="estado"> Estado</p>

        <p><input type="checkbox" name="telCel" value="telCel"> Numero de Celular</p>
    
        <button type="submit" value="consultar" class="botao4">Consultar</button>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>