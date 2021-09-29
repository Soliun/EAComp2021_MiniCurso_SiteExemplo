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
        <div class="container w-75">
            <div class="d-flex p-2 justify-content-center"> 
                <h1>Notícias</h1>
            </div>
            <?php 
                if($num_results > 0) {
                    for($i=0; $i<$num_results; $i++) {
                    $row = mysqli_fetch_array($result);
            ?>
            <!--Notícia-->
            <div class="row mt-3 mb-3 bg-creme">
                <div class="col-sm-12 px-3 py-2  bg-orange">
                    <h2 class="mb-0"><?php print_r(utf8_encode($row['Titulo'])) ?></h2>
                </div>
                <div class="col-sm-3">
                    <img src="assets/bg_slider.svg" alt="" class="img-fluid px-3 py-3">
                </div>
                <div class="col-sm-9 py-3">
                    <p><?php print_r(utf8_encode($row['Texto'])) ?></p>
                </div>
                <div class="col-sm-12 mt-2 px-3">
                    <h4><?php print_r(utf8_encode($row['Data'])) ?></h4>        
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