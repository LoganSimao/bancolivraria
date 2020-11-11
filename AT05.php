<?php
include 'AT06_header.php';
?>
<div class="tabela-container">
<div class="formularios">
<h2>ID</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Telefone</th>
</tr>
<?php
    $sql= "SELECT codigo FROM db_clientes";
    $consulta = mysqli_query($conn,$sql);
    echo "<tr>";
    while($clientes = mysqli_fetch_assoc($consulta)){
        echo "<td>".$formatacao['codigo']."</td>
               <td>".$formatacao['nome']."</td>
                <td>".$formatacao['endereco']."</td>
                <td>".$formatacao['bairro']."</td>
                <td>".$formatacao['cidade']."</td>
                <td>".$formatacao['estado']."</td>
                <td>".$formatacao['telCel']."</td>";
    }
    echo "</tr>";

    if(isset($_POST['nome'])){
        $sql = "SELECT nome FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);
        
        echo "<tr>";
        while($clientes = mysqli_fetch_assoc($consulta)){
            echo "<td>".$clientes['nome']."</td>";
        }
        echo "</tr>";
    }

    if(isset($_POST['endereco'])){
        $sql = "SELECT endereco FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);
        
        while($clientes = mysqli_fetch_assoc($consulta)){
            echo "
            <td>".$clientes['endereco']."</td>
            </tr>";
        }
    }
?>
 </table>
</div>
</div>