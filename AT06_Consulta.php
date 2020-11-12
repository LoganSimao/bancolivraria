<?php
    include 'AT06_header.php';
?>
<div class="tabela-container">
    <div class="divcadastro">
    <!--botoes para cadastro de clientes e modo "avançado" de pesquisa que faz parte da lição 05-->
    <a href="AT05_formulario.php" class="botaocadastro">Cadastrar</a>
    </div>
    <div class="divconsultaavancada">
    <a href="AT05_Formulariodeconsulta.php" class="botaocadastro">Avançado</a>
    </div>
    <!-- -->
<div class="formularios">
<h1>Database</h1>
<!--formulario para consulta no banco de dados-->
<div class="form">
<form action="AT06_search.php" method="POST">
    <h2>Consulta ao banco de dados</h2>
    <input type="text" name="search" placeholder="Consultar..." class="btt1">
    <div class="alinhamento">
        <p>
            <label for="consultaid">
            Consultar por ID <input type="radio" name="id" value="sim">S<input type="radio" name="id" value="nao" checked>N</p>
            <p>tabela ordem decrescente</label><input type="radio" name="decres" value="dec">S<input type="radio" name="decres" value="cre" checked>N
    </p></div>
    <button type="submit" name="cons" class="botaoform1">Enviar</button>
</form>
</div>
<!--formulario para alteração de dados-->
<div class=form>
<form action="AT06_search.php" method="POST">
    <H2>Alteração de dados no banco de dados</h2>
    <p>Alterar <input type="text" name ="valorNovo" placeholder="Dado a ser alterado aqui" class="btt3">
    no ID <input type="number" name="valorVelho" placeholder="ID da alteração" class="btt3"></p><p class="p2"> Na colouna
    <select name = "valorColuna" class="colunas">
        <option value="nome">Nome</option>
        <option value="endereco">Endereço</option>
        <option value="bairro">Bairro</option>
        <option value="cidade">Cidade</option>
        <option value="estado">Estado</option>
        <option value="telCel">Celular</option>
    </select></p>
    <button name="cons2" class="botaoform1">Enviar</button>
</form>
</div>
<!--formulario para deletar registros-->
<div class="form2">
<form action="AT06_search.php" method="POST">
    <h2>Deletar registro do banco de dados</h2>
    <p>ID do registro <input type="number" name="registroDeletar" placeholder="deletar..." class="btt4"></p>
    <button name="cons3" class="botaoform2">Enviar</button>
</form>
</div>
</div>
</div>
</body>
</html>