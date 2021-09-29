<?php
    require_once('header_meta.php');
?>
    <div class="container w-75">
        <form action="menu.php" method="post">
            <div class="form-group text-left">
                <label for="email">Usuário</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entre com seu usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Entre com a sua senha">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Guardar sessão?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
    require_once('footer_meta.php');
?>