<?php
// import
include 'controller.php';
include 'formController.php';
include 'sendmail.php';
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
       <?php include 'navBar.php' ; ?>
        <div class="container" id="colorContainer">
        <?= $content; ?>
        <?php if (isset($_POST['send'])) { ?>
            <div>
            <?php if (count($formError) == 0) { ?>
                <p>Votre message a bien été envoyé</p>
            <?php } else {
                foreach ($formError as $error) {?>
                <p><?= $error; ?></p>
                <?php } ?>
            <?php } ?>
            </div>
        <?php } ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>