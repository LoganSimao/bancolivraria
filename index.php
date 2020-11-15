<?php
    include 'AT06_header.php';

    session_start();

    if(isset($_POST['cad3'])){

        $erro = array();

        $login = mysqli_real_escape_string($conn,$_POST['login']);
        $senha = mysqli_real_escape_string($conn,$_POST['senha']);
        
        if(empty($login) or empty($senha)){
            $erro[] = "<p>- Campo de login e senha incompletos!</p>";
        }
        else{
            $sql = "SELECT loginFunc FROM db_funcionarios WHERE loginFunc = '$login'";

            $resultado = mysqli_query($conn,$sql);
            $rows = mysqli_num_rows($resultado);

            if($rows > 0){
                $sql = "SELECT * FROM db_funcionarios WHERE loginFunc = '$login' AND senhaFunc = '$senha'";
                $resultado = mysqli_query($conn,$sql);
                $rows = mysqli_num_rows($resultado);

                if($rows == 1){
                    $log = mysqli_fetch_array($resultado);

                    mysqli_close($conn);
                    $_SESSION['logado'] = true;
                    $_SESSION['codFunc'] = $log['codFunc'];

                    header('location: AT06_consulta.php');
                }
                else{
                    $erro[] = "<p>- Usuário e senha não conferem!</p>";
                }
            }
            else{
                $erro[] = "<p>- Usuário inexistente!</p>";
            }
        }
    }
    
?>  
    <div class="tabela-container">
        <div class="divcriarbanco">
        <p><a href="criar_bdcompleto.php" class="botaocriarbanco">Criar Banco</a></p>
        </div>
    <div class="formularios">
    <h1>database</h1>
    <div class="form1B">
        <h2>Acesso ao banco de dados</h2>
        <p>Gestão de clientes e funcionários favor identifique-se!</p>
        <form action="<?PHP $_SERVER['PHP_SELF'];?>" method="POST">
            <p>Login</p><input type="text" name="login"  class="btt1">
            <p>Senha</p><input type="password" name="senha" class="btt1">
            <?php
                if(!empty($erro)){
                    foreach($erro as $erros){
                        echo $erros;
                    }
                }
            ?>
            </br></br><input type="submit" name="cad3" value="Entrar" class="botaologin">
        </form>
    </div>
    </div>
    </div>
</body>
</html>
