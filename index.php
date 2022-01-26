<?php

$bonnets = [
    "Bonnet en laine" =>
    ["prix" => 10, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet en laine bio" =>
    ["prix" => 14, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet en laine et cachemire" =>
    ["prix" => 20, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet arc-en-ciel" =>
    ["prix" => 12, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."]
];

function tva($prix)
{
    $prix = $prix * (1 - 0.20);
    return $prix;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnet Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid col-6">

        <table class="table table-dark table-bordered border-secondary table-striped table-hover">
            <?php
            foreach ($bonnets as $key => $value) {
            ?>
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
        </table>
    </div>




</body>

</html>