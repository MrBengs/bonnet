
<?php require_once('includes/header.php'); ?>



<div class="container-fluid col-6">
    <table class="table table-bordered border-secondary table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prix HT</th>
                <th scope="col">Prix TTC</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <?php
        foreach ($bonnets as $key => $value) {
            displayProduct($key, $value);
        }
        ?>
    </table>
</div>
<?php require_once('includes/footer.php'); ?>