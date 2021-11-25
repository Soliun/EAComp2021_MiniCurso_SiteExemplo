<?php

    if(isset($_POST['Titulo'])){
      $titulo = $_POST['Titulo'];
    }else{
      $titulo = null;
    }

    if(isset($_POST['Texto'])){
        $texto = $_POST['Texto'];
      }else{
        $texto = null;
      }

    if(isset($_POST['Data'])){
      $data = $_POST['Data'];
    }else{
      $data = null;
    }
?>

<?php
    require_once('conexao.php');

    if($titulo && $texto && $data){
        $query = "INSERT INTO noticias (Titulo, Texto, Data) VALUES ('".$titulo."', '".$texto."', '".$data."');";
        $sucesso = $mysqli->query($query);

        if($sucesso){
            echo "<script>
                    alert('Notícia inserida');
                    window.location.href='noticias.php';
                </script>";
        }else{
            echo "<script>
                    alert('Erro ao inserir notícia!!!');
                    window.location.href='noticias.php';
                </script>";
        }
    }else{
        echo "<script>
                    alert('Dados incompletos!!!');
                    window.location.href='noticias.php';
                </script>";
    }
    exit();

?>

