<?php
// import
include 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    </head>
    <body>
        <?php
        echo $xml->page[$page]->content;
        ?>
    </body>
</html>