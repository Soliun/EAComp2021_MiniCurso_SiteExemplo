<?php
    require_once('header_meta.php');
    require_once('header.php');
    require_once('conexao.php');
?>

<div class="container w-75">
        <div class="d-flex p-2 justify-content-center">
            <div class="row mt-3 mb-3 bg-creme">
                <div class="col-sm-12 px-3 py-2  bg-orange">
                        <h3 class="mb-0">Nova Notícia</h3>
                </div>
            
                <form action="novaNoticia.php" class="filtro" method="POST"> 
                    <div class="form-group">
                        <label for="Titulo">Título</label>
                        <input name="Titulo" class="form-control" type="text" placeholder="Digite o titulo">
                    </div>
                    <div class="form-group">
                        <label for="Texto">Texto</label>
                        <textarea name="Texto" class="form-control" type="text" rows="3" placeholder="Digite o texto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Data">Data de Publicação</label>
                        <input name="Data" class="form-control" type="text" placeholder="Digite a data de publicação">
                    </div>
                
                    <button type="submit" class="btn button-primary btn-outline-primary button mt-2">Adicionar</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once('footer.php');
    require_once('footer_meta.php');
?>