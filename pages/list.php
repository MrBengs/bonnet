<div class="container-fluid col-8 d-flex">
    <table class="table table-light table-bordered table-striped table-hover border-dark">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prix HT</th>
                <th scope="col">Prix TTC</th>
                <th scope="col">Description</th>
                <th scope="col"><i class="fas fa-shopping-cart"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($bonnets as $key => $value) {
                displayProduct($key, $value);
            }
            ?>
        </tbody>
    </table>
</div>