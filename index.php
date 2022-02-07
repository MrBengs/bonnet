<?php

require_once('includes/header.php');

$page = "home";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

include_once 'pages/' . $page . '.php';

require_once('includes/footer.php');
