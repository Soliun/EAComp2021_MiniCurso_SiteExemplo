<?php
    require_once('conexao.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = null;
    }
    
    $query = "DELETE FROM noticias WHERE id=".$id.";";

    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "<script>
                alert('Notícia deletada com sucesso!');
                window.location.href='noticias.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao deletar notícia!');
                window.location.href='noticias.php';
            </script>";
    }
?>
    