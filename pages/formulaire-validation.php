<?php

$prenom = validation($_POST['prenom']);
$nom = validation($_POST['nom']);
$email = validation($_POST['email']);

function validation($data){

$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}