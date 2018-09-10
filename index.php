<?php
// import
include 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/style.css" />
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    </head>
    <body>
        <?php
        echo $xml->page[$page]->content;
        ?>
    </body>
</html>