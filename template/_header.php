<?php

$mainMenu = [
  "index.php" => ["title" => "Accueil", "head_title" => "Accueil TechTrendz", "meta_description" => "TechTrendz, le site de référence pour les actualités tech !"],
  "actualites.php" => ["title" => "Actualités", "head_title" => "Actualités TechTrendz", "meta_description" => "Découvrez les dernières actualités tech !"],
  "a_propos.php" => ["title" => "A propos", "head_title" => "A propos TechTrendz", "meta_description" => "En savoir plus sur TechTrendz"],
];

$currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$mainMenu[$currentPage]["head_title"] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
</head>

<body>
  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="assets/images/logo-tech-trendz.png" alt="logo TechTrendz"width="150">
          </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <?php foreach ($mainMenu as $key => $menuItem) {?>
            <li><a href="<?=$key; ?>" class="nav-link px-2"><?=$menuItem ["title"]; ?></a></li>
          <?php } ?>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        
        </div>
      </header>

      <main>