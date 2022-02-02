<?php

function tva($prix)
{
    $prix = $prix * (1 - 0.20);
    return $prix;
}

function displayProduct($key, $value, $displayButton = true)
{ ?>
    <tr>
        <td><?= "{$key}" ?></td>
        <td><?= tva($value['prix']) ?>€</td>
        <td <?php if ($value['prix'] < 12) {
                echo 'class=text-success';
            } else {
                echo 'class=text-primary';
            }
            ?>><?= $value['prix'] ?>€</td>

        <td><?= $value['description'] ?></td>
        <td><a class="btn btn-outline-success" role="button" href="?page=panier&key=<?= $key; ?>">Ajouter au panier</a></td>
    </tr>

<?php
}


function displayCards($name, $value)
{ ?>
    <div class="card mx-2 my-auto" style="width: 18rem;">
        <img src="<?= $value['image'] ?>" class="card-img-top">
        <div class=" card-body">
            <h5 class="card-title"><?= $name ?></h5>
            <p class="card-text"><?= $value['description'] ?></p>
            <a href="?page=panier&key=<?= $name; ?>" class="btn btn-primary">Ajouter au panier</a>
        </div>
    </div>
<?php }
