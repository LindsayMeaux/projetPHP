<?php
// import
include 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img class="imgShadow" src="assets/img/Screenshot_2018-09-10 Ocordo Travaux Nantes - Entreprise de rénovation et construction.png" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php for ($numberPage = 0; $numberPage < count($allPage); $numberPage++) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/page-<?= $numberPage; ?>.html"><?= $xml->page[$numberPage]->menu; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <div class="container">
            <?= $content; ?>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>