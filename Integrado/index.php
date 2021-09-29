<?php 
    require_once('header_meta.php');
    require_once('header.php');
    require_once('conexao.php');
?>
    <!--CARROSSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <h1>bem-vindo!</h1>
                <a href="#" class="btn button-primary btn-outline-primary button">Saiba Mais</a>
            </div>
            <div class="carousel-item text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nulla ut viverra placerat. Vestibulum luctus cursus eros ac egestas.
                </p>
            </div>
            <div class="carousel-item text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis nulla ut viverra placerat. Vestibulum luctus cursus eros ac egestas.
                </p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--FIM DO CARROSSEL-->

    <!--SOBRE-->
    <div id="sobre">
        <div class="container-fluid py-5">
            <div class="col-ms-12 text-center">
                <h1>Sobre o Site</h1>
                <p>texto sobre o site</p>
            </div>
        </div>
    </div>
    <!--FIM DO SOBRE-->

    <?php
            mysqli_select_db($mysqli, $bd) or die("Could not select database");

            $query = "SELECT * FROM integrantes";
            $result = mysqli_query($mysqli, $query);
            $num_results = mysqli_num_rows($result);
        ?>

  <!--INTEGRANTES-->
    <div id="integrantes">
        <div class="container mt-3">
            <div class="row">
                <div class="text-center mb-3">
                    <h1>INTEGRANTES</h1>
                </div>

                <?php 

                    if($num_results > 0) {
                        for($i=0; $i<$num_results; $i++) {
                        $row = mysqli_fetch_array($result);
                    ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top px-3 py-3" src="./assets/integrantes/<?php print_r(utf8_encode($row['Foto'])) ?>" alt="Imagem de capa do card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php print_r(utf8_encode($row['Titulo'])) ?></h5>
                            <p class="card-text"><?php print_r(utf8_encode($row['Texto'])) ?></p>
                            <a href="#integrantes" class="btn button-primary btn-outline-primary button">Visitar</a>
                        </div>
                    </div>    
                </div>

                <?php 
                    }
                }
                ?>
                

            </div>
        </div>
    </div>
    <!--FIM DOS INTEGRANTES-->

<?php 
    require_once('footer.php');
?>