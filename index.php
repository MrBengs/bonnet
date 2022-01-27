<?php require_once('includes/header.php'); ?>


<div class="container-fluid bg-light d-flex">
    <?php
    foreach (array_slice($bonnets, 0, 3, true) as $name => $value) {
        displayCards($name, $value);
    }
    ?>

</div>
<div class="container-fluid bg-light">
    <a class="btn btn-outline-primary mt-5 ms-2" href="list.php" role="button">List</a>
</div>


<?php require_once('includes/footer.php'); ?>