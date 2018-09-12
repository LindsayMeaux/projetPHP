<?php

include 'formController.php';

if (count($formError) == 0 && !empty($_POST['send'])) {

    mail('petraphuko@wemel.top', $name . ' - ' . $subjet, $message);

}