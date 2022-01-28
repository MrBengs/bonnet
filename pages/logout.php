<?php require_once('includes/header.php'); 
session_destroy();


 header("Location: index.php?disconnected=1");
 require_once('includes/footer.php');?>