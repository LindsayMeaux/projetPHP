 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img class="imgShadow" src="assets/img/ocordo.png" alt="logo ocordo" />
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