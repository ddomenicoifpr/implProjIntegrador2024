<?php
#View para a home do sistema

require_once(__DIR__ . "/../include/header.php");
require_once(__DIR__ . "/../include/menu.php");
?>
<link rel="stylesheet" href="home.css">

<div class="row mt-3 justify-content-center">
    <div class="col-3 text-center">
        <span class="fonte-grande">Usuários ativos: </span>

        <span class="badge badge-info fonte-grande">X</span>
    </div>

</div>

<?php
require_once(__DIR__ . "/../include/footer.php");
?>