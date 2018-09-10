<?php
// import
include 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/style.css" />
        <meta charset="utf-8" />
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Navbar</a>
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
        <?= $content; ?>
    </body>
</html>