<?php
    require_once('header_meta.php');
    require_once('header.php');
    require_once('conexao.php');

    mysqli_select_db($mysqli, $bd) or die("Could not select database");

    $query = "SELECT * FROM noticias ORDER BY Data";
    $result = mysqli_query($mysqli, $query);
    $num_results = mysqli_num_rows($result);

?>

    <!--NOTÍCIAS-->
    <div id="noticias">
        <div class="container w-75 mt-3">
            <div class="row">
                <div class="col-2 align-self-center"></div>
                <div class="col-8 align-self-center">
                    <h1 class="text-center">Notícias</h1>
                </div>
                <div class="col-2 align-self-center">
                    <a href="adicionarNoticia.php" class="btn button-primary btn-outline-primary button">Adicionar</a>
                </div>
            </div>
            <?php 
                if($num_results > 0) {
                    for($i=0; $i<$num_results; $i++) {
                    $row = mysqli_fetch_array($result);
            ?>
            <!--Notícia-->
            <div class="row mt-3 mb-3 bg-creme">
                <div class="col-sm-12 px-3 py-2  bg-orange">
                    <h2 class="mb-0"><?php print_r($row['Titulo']) ?></h2>
                </div>
                <div class="col-sm-3">
                    <img src="assets/bg_slider.svg" alt="" class="img-fluid px-3 py-3">
                </div>
                <div class="col-sm-9 py-3">
                    <p><?php print_r($row['Texto']) ?></p>
                </div>
                <div class="col-sm-12 px-3">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <h4><?php print_r($row['Data'])  ?></h4> 
                        </div>
                        <div class="col-4"></div>
                        <div class="col-2 align-self-center">
                            <form action="editarNoticia.php" method="post">
                                <input type="hidden" value="<?php print_r($row['id'])?>" name="id" >
                                <input class="btn button-primary btn-outline-primary button" type="submit" value="Editar">
                            </form>         
                        </div>
                        <div class="col-2 align-self-center">
                            <form action="excluirNoticia.php" method="post">
                                <input type="hidden" value="<?php print_r($row['id'])?>" name="id" >
                                <input class="btn button-primary btn-outline-primary button" type="submit" value="Excluir">
                            </form>                
                        </div>
                    </div>       
                </div>
            </div>
            <!-- Fim da Notícia-->
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!--FIM DAS NOTÍCIAS-->

<?php
    require_once('footer.php');
    require_once('footer_meta.php');
?>