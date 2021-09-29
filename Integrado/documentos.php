<?php 
    require_once('header_meta.php');
    require_once('header.php');
    require_once('conexao.php');

    mysqli_select_db($mysqli, $bd) or die("Could not select database");

    $query = "SELECT * FROM documentos";
    $result = mysqli_query($mysqli, $query);
    $num_results = mysqli_num_rows($result);
?>
    
    <!--DOCUMENTOS-->
    <div id="documentos">
        <div class="container">
            <div class="d-flex p-2 justify-content-center"> 
                <h1>Documentos</h1>
            </div>
            <div class="row justify-content-center">
                <h3 class="px-0 w-75">Seção 1</h3>
                <table class="table table-bordered text-center w-75">
                    <thead>
                        <tr class="bg-brown">
                            <th scope="col" style="color: white;">Título</th>
                            <th scope="col" style="color: white;">Download</th>
                        </tr>
                    </thead>
                    <tbody class="bg-orange"> 
                    <?php 
                    if($num_results > 0) {
                        for($i=0; $i<$num_results; $i++) {
                        $row = mysqli_fetch_array($result);
                    ?>
                        <tr>
                            <th scope="row"><?php print_r(utf8_encode($row['Titulo'])) ?></th>
                            <td>
                                <a href="./documents/<?php print_r(utf8_encode($row['Arquivo'])) ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--FIM DAS DOCUMENTOS-->

<?php 
    require_once('footer.php');
    require_once('footer_meta.php');
?>