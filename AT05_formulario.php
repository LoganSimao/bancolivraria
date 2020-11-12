<?php
    include 'AT06_header.php';
?>
    <div class="tabela-container">
    <div class="divcadastro">
    <a href="index.php" class="botaocadastro">Voltar</a>
    </div>
    <div class="divcadastro1">
    <!--cadastro automatico de alguns clientes-->
    <form action="AT06_search.php" method="POST">
    <input type="submit" name="cad" class="botaocadastroauto" value ="Cadastro Automatico">
    </form>
    </div>
    <div class="formularios">
    <h1>Livraria</h1>
    <div class="form1A">
    <!--cadastro manual dos clientes-->
    <h2>Cadastro de Clientes</h2>
    <form name="cadastro_bd" method="POST" action="AT06_search.php">
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
        <br><br><input type="submit" value="Enviar" class="botaoform1"name ="cad">
    </form>
    
    </div>
    </div>
    </div>
</body>
</html>