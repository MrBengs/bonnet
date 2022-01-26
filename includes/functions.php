<?php

function tva($prix)
{
    $prix = $prix * (1 - 0.20);
    return $prix;
}

function displayProduct($key, $value)
{ ?>
    <tr>
        <td><?= "{$key}" ?></td>
        <td><?= tva($value['prix']) ?>€</td>
        <td <?php if ($value['prix'] < 12) {
                echo 'class=text-success';
            } else {
                echo 'class=text-primary';
            }
            ?>>Prix:<?= $value['prix'] ?>€</td>

        <td>description:<?= $value['description'] ?></td>
    </tr>
<?php
}

?>