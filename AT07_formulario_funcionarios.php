<?php
    include 'AT06_header.php';
    session_start();
    
    if(!isset($_SESSION['logado'])){
        header('Location: restrict.php');
    }
?>
    <div class="tabela-container">
    <div class="divcadastro">
    <a href="AT06_consulta.php" class="botaocadastro">Voltar</a>
    </div>
    <div class="formularios">
    <h1>Livraria</h1>
    <div class="form1B">
        <h2>Cadastro de funcionários</h2>
        <form action="AT05_retorno_do_formulario" method="POST">
            <p>Nome</p><input type="text" name="nome" class="btt2">
            <p>Login</p><input type="text" name="login" class="btt2">
            <p>Senha</p><input type="password" name="senha" class="btt2">
            </br></br><input type="submit" name="cad1" class="botaoform1" value="Enviar">
        </form>
    </div>
    </div>
    </div>
</body>
</html>