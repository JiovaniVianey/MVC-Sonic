<section>
    <div id="jumbo" class="jumbotron no-margin opaque2">
        <center>
            <h1 id="white-text" class="display-4">Here's a PHP website... But with the GOAT Sonic the Hedgehog ?!</h1>
            <img src="<?= $absoluteURL ?>/assets/images/logo_sonic.gif" alt="" style="margin-left: 10px;">
        </center>
        <hr>
        <center>
            <h2 id="white-text" class="display-4">Voici une liste de quelques personnages célèbres de la série :</h2>
        </center>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th id="white-text" scope="col">Name</th>
                                <th id="white-text" scope="col"></th>
                                <th id="white-text" scope="col">Type</th>
                                <th id="white-text" scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($viewData['characters'] as $currentCharacter) : ?>
                                <tr>
                                    <td scope="row" id="white-text"><?= $currentCharacter->getName() ?></td>
                                    <td class="w-25">
                                        <img src="<?= $absoluteURL ?>/assets/images/<?= $currentCharacter->getPicture() ?>" class="img-fluid img-thumbnail" alt="Sheep">
                                    </td>
                                    <td id="white-text"><?= $viewData['types'][$currentCharacter->getType_id() - 1]->getName() ?></td>
                                    <td id="white-text"><?= $currentCharacter->getDescription() ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>