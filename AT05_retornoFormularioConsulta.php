<?php
    include 'AT06_header.php';
    $lists = array();
    $lists1 = array();
    $lists2 = array();
    $lists3 = array();
    $lists4 = array();
    $lists5 = array();
    $lists6 = array();

    echo " <div class='tb-container'>
    <div class='divcadastro'>
    <a href='index.php' class='botaocadastro'>Voltar</a>
</div>
           <div class='tb-container1'>";
    
    echo "<div class='scon_nome0' style='padding-left: 10px;'>";
        
        echo "<p><b>ID</b></p>";
        $sql = "SELECT codigo FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            echo $clientes_array['codigo'].'<br>';
        }
        echo "</div>";
        
    if (isset($_GET['nome'])){  
        echo "<div class='scon_nome1' style='padding-left:10px;'>";
        echo "<p><b>Nomes</b></p>";
        $sql = "SELECT nome FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);
        
        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['nome'];
            array_push($lists,$store);
        }

        foreach($lists as $list){
            echo $list. "<br>";
        }
        echo "</div>";
        
    }
    
    if (isset($_GET['endereco'])){
        echo "<div class='scon_nome2' style = 'padding-left: 10px;'>";
        echo "<p><b>Endereços</b></p>";
        $sql = "SELECT endereco FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['endereco'];
            array_push($lists1,$store);
        }

        foreach($lists1 as $list1){
            echo $list1. "<br>";
        }
        
        echo "</div>";
    }
    
    if (isset($_GET['bairro'])){
        echo "<div class='scon_nome3' style='padding-left: 10px;'>";
        echo "<p><b>Bairros</b></p>";
        $sql = "SELECT bairro FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['bairro'];
            array_push($lists2,$store);
        }

        foreach($lists2 as $list2){
            echo $list2. "<br>";
        }
        echo "</div>";
    }
        
    if (isset($_GET['cidade'])){
        echo "<div class='scon_nome4' style='padding-left: 10px;'>";
        echo "<p><b>Cidades</b></p>";
        $sql = "SELECT cidade FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['cidade'];
            array_push($lists3,$store);
        }

        foreach($lists3 as $list3){
            echo $list3. "<br>";
        }
        echo "</div>";
    }
    
    if (isset($_GET['estado'])){
        echo "<div class='scon_nome5' style='padding-left: 10px;'>";
        echo "<p><b>Estados</b></p>";
        $sql = "SELECT estado FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['estado'];
            array_push($lists4,$store);
        }

        foreach($lists4 as $list4){
            echo $list4. "<br>";
        }
        echo "</div>";
    }     

    if (isset($_GET['telCel'])){
        echo "<div class='scon_nome6' style='padding-left: 10px;'>";
        echo "<p><b>Tel Celular</b></p>";
        $sql = "SELECT telCel FROM db_clientes";
        $consulta = mysqli_query($conn,$sql);

        while($clientes_array = mysqli_fetch_array($consulta)){
            $store = $clientes_array['telCel'];
            array_push($lists5,$store);
        }

        foreach($lists5 as $list5){
            echo $list5. "<br>";
        }
        echo "</div>";
    }
    echo"</div></div>";
  
    mysqli_close($conn);
?>
