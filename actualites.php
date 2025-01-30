<?php

require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/template/_header.php";

?>

<h1>Actualités</h1>

<div class="row text-center">
    <?php foreach ($articles as $key=>$article) { 
        require __DIR__ . "/template/_article.php";
    } ?>

</div>

<?php require_once __DIR__ . "/template/_footer.php"; ?>