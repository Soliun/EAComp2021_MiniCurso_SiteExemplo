<?php
    require_once('conexao.php');
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = null;
    }

    if(isset($_POST['Titulo'])){
        $Titulo = $_POST['Titulo'];
    }else{
        $Titulo = null;
    }

    if(isset($_POST['Texto'])){
        $Texto = $_POST['Texto'];
    }else{
        $Texto = null;
    }

    if(isset($_POST['Data'])){
        $Data = $_POST['Data'];
    }else{
        $Data = null;
    }
    
    $query = 'UPDATE noticias SET Titulo="'.$Titulo.'", Texto="'.$Texto.'", Data="'.$Data.'" WHERE id='.$id.";";

    $result = mysqli_query($mysqli,$query);
    if($result) {   
        echo "<script>
                alert('Notícia atualizada com sucesso!');
                window.location.href='noticias.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao atualizar a notícia!');
                window.location.href='noticias.php';
            </script>";
    }
?>