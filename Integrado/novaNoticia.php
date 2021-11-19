<?php
    $buscaRealizada =  false;

    

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

    mysqli_select_db($mysqli, $bd)or die("SQL Error: " . mysql_error());

    if($titulo && $texto && $data){
        $query = "INSERT INTO noticias (Titulo, Texto, Data)
                VALUES ($titulo, $texto, $data)";
        $sucesso = $mysqli->query($query) or die("SQL Error: " . mysql_error());;
        

        if($sucesso)
        {

            echo "<script>
                    alert('Notícia inserida');
                </script>";

        }
        else
        {
            echo "<script>
                    alert('Erro ao inserir notícia!!!');
                </script>";
        }

    }
    else
    {
        echo "<script>
                    alert('Dados incompletos!!!');
                </script>";
    }

    
    exit();
    

?>

