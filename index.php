<?php

$bonnets = [
    "Bonnet en laine" =>
    ["prix" => "10€", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet en laine bio" =>
    ["prix" => "14€", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet en laine et cachemire" =>
    ["prix" => "20€", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],

    "Bonnet arc-en-ciel" =>
    ["prix" => "12€", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."]
]

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnet Php</title>
</head>

<body>
    <table>
        <?php
        foreach ($bonnets as $key => $value) {
        ?>
            <tr>
                <td><?= "{$key}" ?></td>
                <td>Prix:<?= "{$value['prix']}" ?></td>
                <td>description:<?= "{$value['description']}" ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>