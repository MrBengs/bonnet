<?php 

$bonnets = array(
    1 => "Bonnet en laine",
    2 =>  "Bonnet en laine bio",
    3 => "Bonnet en laine et cachemire",
    4 => "Bonnet arc-en-ciel"
);

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
    foreach($bonnets as $key => $value){
    ?> 
    <tr>
    <td><?= "{$key} => {$value}"?></td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>