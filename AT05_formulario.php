<?php
    include 'AT06_header.php';
?>
    <div class="tabela-container">
    <div class="divcadastro">
    <a href="AT06_Consulta.php" class="botaocadastro">Voltar</a>
    </div>
    <div class="formularios">
    <h1>Livraria</h1>
    <div class="form1A">
    <h2>Cadastro de Clientes</h2>
    <form name="cadastro_bd" method="POST" action="AT05_retorno_do_formulario.php">
        <p>Nome</p>
        <input type="text" name="nome" class="btt2">
        <p>Endereço</p>
        <input type="text" name="endereco" class="btt2">
        <p>Bairro</p>
        <input type="text" name="bairro" class="btt2">
        <p>Cidade</p>
        <input type="text" name="cidade" class="btt2">
        <p>Estado</p>
        <input type="text" name="estado" class="btt2">
        <p>Numero de Celular</p>
        <input type="text" name="telcel" class="btt2">
        <!--<p>Codigo</p>
        <input type="text" name="codigo"> -->
        <br><br><input type="submit" value="Enviar" class="botaoform1">
    </form>
    </div>
    </div>
    </div>
</body>
</html>