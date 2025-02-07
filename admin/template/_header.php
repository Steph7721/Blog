<?php
$adminMenu = [
    'index.php' => 'Accueil',
    'articles.php' => 'Articles',
];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/override-bootstrap.css">

    <title>Admin TechTrendz</title>
</head>

<body>
    <div class="container d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Admin</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <?php foreach ($adminMenu as $page => $titre) { ?>
                    <li class="nav-item"><a href="<?= $page; ?>" class="nav-link text-white <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) {
                                                                                        echo 'active';
                                                                                    } ?>"><?= $titre; ?></a></li>
                <?php } ?>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong><?= $_SESSION["user"]["first_name"]; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="../logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
<main class="d-flex flex-column px-4">