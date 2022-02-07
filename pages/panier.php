<?php 
if(!isset($_SESSION['panier'])){
$_SESSION['panier'] = [];
}

if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $value = $bonnets;

    if (!isset($_SESSION['panier'][$key])) {
        $_SESSION['panier'][$key] = 0;
    }

    switch ($_GET['operation']) {
        case 'plus':
            $_SESSION['panier'][$key] = $_SESSION['panier'][$key] + 1;
            break;
        case 'min':
            $_SESSION['panier'][$key] = $_SESSION['panier'][$key] - 1;
            if ($_SESSION['panier'][$key] <= 0) {
                unset($_SESSION['panier'][$key]);
            }
            break;
        case 'null':
            unset($_SESSION['panier'][$key]);
            break;
    }

    //header("Location: ?page=panier");
} elseif (isset($_GET['operation'])) {
    $_SESSION['panier'] = [];
}

?>
<?php 


?>

<div class="d-flex">

<div class="container col-6">
        
<?php  
    foreach ($_SESSION['panier'] as $nom => $quantity) {
        $bonnet = null;
        foreach ($bonnets as $value) {
            if ($value->getNom() == $nom) {
                $bonnet = $value;
                break;
            }
        }
    ?>
    <div class="row g-0">
        <div style="width: 18rem;">
            <img src="<?= $bonnet->getImage() ?>" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <div class="card-body">
                <h5 class="card-title"><?= $nom ?></h5>
                <p class="card-text"><?= $bonnet->getPrix() ?>€</p>
                <p class="card-text"><?= $bonnet->getDescription() ?></p>
                <a href="?page=panier&key=<?= $nom ?>&operation=plus" class="btn btn-warning">+</a>
                <span><?= $quantity ?></span>
                <?php 
                if( $quantity > 0) {
                    ?> <a href="?page=panier&key=<?= $nom ?>&operation=min" class="btn btn-warning">-</a>
                    <?php
                }      
                ?>

                <p>
                    <a class="btn btn-danger mt-1" href="?page=panier&key=<?= $nom ?>&operation=null">Supprimez l'élément</a>
                </p>
                 <p>
                    <a class="btn btn-outline-info mt-1" href="?page=panier&operation=null">Vider le panier</a>
                </p>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<div class="col-3">
    <?php 
    foreach ($_SESSION['panier'] as $key => $quantity) {
        $value = $bonnets;
        $total = $bonnet->getPrix()*$quantity; ?>
    <div><?= $total ?>€</div>
    <?php } ?>
     <a class="btn btn-info mt-1" href="#">Procéder au paiement</a>
</div>

</div>
    