<?php
    require_once('header_meta.php');
    require_once('header.php');
    require_once('conexao.php');

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = null;
    }
    
    $query = "SELECT * FROM noticias WHERE id=".$id.";";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);

?>

<div class="container w-75">
        <div class="d-flex p-2 justify-content-center">
            <div class="row mt-3 mb-3 bg-creme">
                <div class="col-sm-12 px-3 py-2  bg-orange">
                        <h3 class="mb-0">Alterar Notícia</h3>
                </div>
            
                <form action="editar.php" class="filtro" method="POST"> 
                    <div class="form-group">
                        <label for="Titulo">Título</label>
                        <input name="Titulo" class="form-control" type="text" value="<?php print_r($row['Titulo'])?>">
                    </div>
                    <div class="form-group">
                        <label for="Texto">Texto</label>
                        <textarea name="Texto" class="form-control" rows="20" cols="50" type="text"><?php print_r($row['Texto'])?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Data">Data de Publicação</label>
                        <input name="Data" class="form-control" type="text" value="<?php print_r($row['Data'])?>">
                    </div>
                    <input type="hidden" value="<?php print_r($row['id'])?>" name="id" >
                    <button type="submit" class="btn button-primary btn-outline-primary button mt-2">Alterar</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once('footer.php');
    require_once('footer_meta.php');
?>