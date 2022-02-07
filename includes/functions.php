<?php

require_once('classes/bonnet.class.php');

function tva(Bonnet $bonnet)
{
    $prix = $bonnet->getPrix() * (1 - 0.20);
    return $prix;
}

function displayProduct(Bonnet $bonnet, $displayButton = true)
{ ?>
    <tr>
        <td><?= $bonnet->getNom() ?></td>
        <td><?= tva($bonnet) ?>€</td>
        <td <?php if ($bonnet->getPrix() < 12) {
                echo 'class=text-success';
            } else {
                echo 'class=text-primary';
            }
            ?>><?= $bonnet->getPrix() ?>€</td>

        <td><?= $bonnet->getDescription() ?></td>
        <td><a class="btn btn-outline-success" role="button" href="?page=panier&key=<?= $bonnet->getNom() ?>&operation=plus">Ajouter au panier</a></td>
    </tr>

<?php
}


function displayCards(Bonnet $bonnet)
{ ?>
    <div class="card mx-2 my-auto" style="width: 18rem;">
        <img src="<?= $bonnet->getImage() ?>" class="card-img-top">
        <div class=" card-body">
            <h5 class="card-title"><?= $bonnet->getNom() ?></h5>
            <p class="card-text"><?= $bonnet->getDescription() ?></p>
            <a href="?page=panier&key=<?= $bonnet->getNom(); ?>&operation=plus" class="btn btn-primary">Ajouter au panier</a>
        </div>
    </div>
<?php }
