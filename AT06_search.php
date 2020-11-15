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
<h1>Resultado da Consulta</h1>
    <?php
    //consulta ao banco de dados
    if(isset($_POST['cons'])){
        $valor = $_POST['id'];
        $valor2 = $_POST['decres'];
        $consulta = $_POST['search'];
        $s = "sim";
        $n = "nao";
        $d = "dec";

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Telefone</th>
                </tr>";
                
        if($valor == $s){
            //consulta com id
            $sql2= "SELECT * FROM db_clientes WHERE codigo LIKE '%$consulta%'";
            $resultado2 = mysqli_query($conn,$sql2);
            $resultadoConsulta2 = mysqli_num_rows($resultado2);
            echo "<h2 class='consulta'>Há ".$resultadoConsulta2." resultados compativeis com \"".$consulta."\".</h2>";
            $i=0;
            while($formatacao = mysqli_fetch_assoc($resultado2)){
                if($i % 2 == 0){
                echo "<tr>
                        <td>".$formatacao['codigo']."</td>
                        <td>".$formatacao['nome']."</td>
                        <td>".$formatacao['endereco']."</td>
                        <td>".$formatacao['bairro']."</td>
                        <td>".$formatacao['cidade']."</td>
                        <td>".$formatacao['estado']."</td>
                        <td>".$formatacao['telCel']."</td>
                      </tr>";
                      $i++;
                    }
                else{
                    echo "<tr class='color1'>
                    <td>".$formatacao['codigo']."</td>
                    <td>".$formatacao['nome']."</td>
                    <td>".$formatacao['endereco']."</td>
                    <td>".$formatacao['bairro']."</td>
                    <td>".$formatacao['cidade']."</td>
                    <td>".$formatacao['estado']."</td>
                    <td>".$formatacao['telCel']."</td>
                  </tr>";
                  $i++;
                }
            }
        echo"</table>";
        }
        
    
        elseif($valor == $n && $valor2 == $d){
            //consulta sem id
            $sql = "SELECT * FROM db_clientes WHERE nome LIKE '%$consulta%' OR endereco LIKE '%$consulta%' OR bairro LIKE '%$consulta%'
            OR cidade LIKE '%$consulta%' OR estado LIKE '%$consulta%' OR telCel LIKE '%$consulta%' OR codigo LIKE '%$consulta%' ORDER BY codigo DESC";
            $resultado = mysqli_query($conn,$sql);
            $resultadoConsulta = mysqli_num_rows($resultado);
            echo "<h2 class='consulta'>há ".$resultadoConsulta." resultados compativeis com \"".$consulta."\".</h2>";
            $i=0;
            while($formatacao2 = mysqli_fetch_assoc($resultado)){
                if($i % 2 == 0){
                echo "<tr>
                        <td>".$formatacao2['codigo']."</td>
                        <td>".$formatacao2['nome']."</td>
                        <td>".$formatacao2['endereco']."</td>
                        <td>".$formatacao2['bairro']."</td>
                        <td>".$formatacao2['cidade']."</td>
                        <td>".$formatacao2['estado']."</td>
                        <td>".$formatacao2['telCel']."</td>
                      </tr>";
                      $i++;
                    }
                else{
                    echo "<tr class='color1'>
                    <td>".$formatacao2['codigo']."</td>
                    <td>".$formatacao2['nome']."</td>
                    <td>".$formatacao2['endereco']."</td>
                    <td>".$formatacao2['bairro']."</td>
                    <td>".$formatacao2['cidade']."</td>
                    <td>".$formatacao2['estado']."</td>
                    <td>".$formatacao2['telCel']."</td>
                  </tr>";
                  $i++;
                }
            }   
        echo"</table>";
        }
        elseif($valor == $n){
            //consulta sem id
            $sql = "SELECT * FROM db_clientes WHERE nome LIKE '%$consulta%' OR endereco LIKE '%$consulta%' OR bairro LIKE '%$consulta%'
            OR cidade LIKE '%$consulta%' OR estado LIKE '%$consulta%' OR telCel LIKE '%$consulta%' OR codigo LIKE '%$consulta%' ORDER BY codigo ASC";
            $resultado = mysqli_query($conn,$sql);
            $resultadoConsulta = mysqli_num_rows($resultado);
            echo "<h2 class='consulta'>há ".$resultadoConsulta." resultados compativeis com \"".$consulta."\".</h2>";
            $i=0;
            while($formatacao2 = mysqli_fetch_assoc($resultado)){
                if($i % 2 == 0){
                echo "<tr>
                        <td>".$formatacao2['codigo']."</td>
                        <td>".$formatacao2['nome']."</td>
                        <td>".$formatacao2['endereco']."</td>
                        <td>".$formatacao2['bairro']."</td>
                        <td>".$formatacao2['cidade']."</td>
                        <td>".$formatacao2['estado']."</td>
                        <td>".$formatacao2['telCel']."</td>
                      </tr>";
                      $i++;
                    }
                else{
                    echo "<tr class='color1'>
                    <td>".$formatacao2['codigo']."</td>
                    <td>".$formatacao2['nome']."</td>
                    <td>".$formatacao2['endereco']."</td>
                    <td>".$formatacao2['bairro']."</td>
                    <td>".$formatacao2['cidade']."</td>
                    <td>".$formatacao2['estado']."</td>
                    <td>".$formatacao2['telCel']."</td>
                  </tr>";
                  $i++;
                }
            }   
        echo"</table>";
        }

        else{
            echo "<h2 class='consulta'>Desculpe, não há resultados para a sua consulta!</h2>";
        }
    }

    //Alteração no banco de dados
    if(isset($_POST['cons2'])) {

        $valorVelho = $_POST['valorVelho'];
        $valorNovo = $_POST['valorNovo'];
        $coluna = $_POST['valorColuna'];
        
        $sql3 = "UPDATE db_clientes SET $coluna = '$valorNovo' WHERE codigo = '$valorVelho';";
        $resposta = mysqli_query($conn,$sql3);
        if($resposta == $valorNovo){
            echo "<h2 class='consulta'>dado alterado com sucesso</h2>";
        }
        else{
            echo "<h2 class='consulta'>não foi possivel alterar os dados</h2>";
        }

    }

    //deletar registro
    if(isset($_POST['cons3'])){
        $rd = $_POST['registroDeletar'];
        $sql4 = "DELETE FROM db_clientes WHERE codigo = $rd;";

        if(mysqli_query($conn,$sql4)){
            echo "<h2 class='consulta'>Cadastro deletado!</h2>";
        }
        else{
            echo "<h2 class='consulta'>Falha na exclusão do registro</h2>";
        }
    }

    //cadastro de clientes
    if(isset($_POST['cad'])){
    
        $sql = "INSERT INTO db_clientes (nome,endereco,bairro,cidade,estado,telCel) 
        VALUES ('Steve R Peralez','Edgewood Avenue','Fresno','California','CA','5592684454'),
        ('Emely K Reece','Edwards Street','Rock Mount','North Carolina','NC','2527745079'),
        ('John D Makowski','River Road','Colorado Springs','Colorado','CO','7193931032'),
        ('Robert K Davis','Evergreen Lane','Lone Tree','Iowa','IA','3235963047'),
        ('Dora M Butters','Swick Hill Street','New Orleans','Louisiana','LA','9852437103'),
        ('Shirley J Smith','goldcliff Circle','Washington','Washington DC','DC','2026242179')";
        
        if(mysqli_query($conn,$sql)){
            echo "<h2>Clientes cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao inserir clientes! Erro: ".mysqli_error($conn)."</h2>";
        }
    }
    //logout do sistema

    if(isset($_POST['logout'])){
        session_start();
        session_unset();
        session_destroy();

        header('Location: index.php');
    }
    mysqli_close($conn);
?>
</div>
</div>    
</body>
</html>