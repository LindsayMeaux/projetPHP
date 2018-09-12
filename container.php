<div class="container" id="colorContainer">
    <?= $content; ?>
    <?php if (isset($_POST['send'])) { ?>
        <div>
            <?php if (count($formError) == 0) { ?>
                <p>Votre message a bien été envoyé</p>
            <?php } else {
                foreach ($formError as $error) {
                    ?>
                    <p><?= $error; ?></p>
                <?php } ?>
        <?php } ?>
        </div>
<?php } ?>
</div>