<?php
session_start();
if (isset($_POST['id'])) {
    $_SESSION['login'] = $_POST['id'];
}
if (!empty($_GET['disconnected']) && $_GET['disconnected'] == 1) {
?><div>Vous êtes déconnecté</div>
<?php
}
require_once('includes/functions.php');
require_once('includes/variables.php');
require_once('classes/bonnet.class.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnet Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


</head>



<body>
    <ul class="nav justify-content-end mb-3">
        <?php
        if (isset($_SESSION['login'])) {
        ?>
            <li class="nav-item">Bienvenue <?= $_SESSION['login']; ?></li>
        <?php
        }
        ?>
        <li class="nav-item">
            <a class="nav-link link-dark" href="index.php?page=home">Acceuil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-dark" href="index.php?page=list">List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-dark btn btn-outline-info" href="index.php?page=panier">Panier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link-dark" href="index.php?page=login">Log In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  link-dark" href="index.php?page=logout">Log Out</a>
        </li>
    </ul>