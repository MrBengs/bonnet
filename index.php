<?php require_once('includes/header.php'); ?>


<div class="container-fluid bg-dark d-flex">
    <?php
    foreach (array_slice($bonnets, 0, 3, true) as $name => $value) {
        displayCards($name, $value);
    }
    ?>
</div>

<?php require_once('includes/footer.php'); ?>