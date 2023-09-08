<section>
    <div id="jumbo" class="jumbotron no-margin opaque2">
        <center>
            <h1 id="white-text" class="display-4">Voici les 3 fameux créateurs du premier jeu Sonic !</h1>
            <img id="ring-img" src="<?= $absoluteURL ?>/assets/images/logo_ring.gif" alt="" style="margin-left: 10px;">
            <h2 id="white-text" class="display-4">(Sorti en 1991 sur Mega Drive, Game Gear et Master System)</h2>
            <h3 id="white-text">
                Ces trois créateurs talentueux ont collaboré pour donner vie à Sonic the Hedgehog, un jeu qui est rapidement devenu emblématique et qui a jeté les bases de la franchise Sonic qui perdure encore aujourd'hui.
            </h3>
        </center>
        <hr>
        <center>
            <div class="container">
                <?php foreach ($viewData['creators'] as $picture => $currentCreator) : ?>
                    <h3 id="white-text"><?= $currentCreator ?> </h3>
                    <a class="w-25">
                        <img src="<?= $absoluteURL ?>/assets/images/<?= $picture ?>" class="img-fluid img-thumbnail" alt="Sheep">
                    </a>
                    <p id="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut excepturi molestiae explicabo. Hic consectetur porro soluta incidunt perspiciatis eligendi vel, voluptates, veniam adipisci laudantium rem.</p>
                    <hr>
                <?php endforeach ?>
            </div>
        </center>
    </div>
</section>