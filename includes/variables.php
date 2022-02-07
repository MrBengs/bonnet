
<?php

require_once('classes/bonnet.class.php');

$password = "toto";

$bonnets = [
    new Bonnet("Bonnet en laine", 10, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.", "assets/bonnet1.jpeg", "m", "laine" ),
    new Bonnet("Bonnet en laine bio", 14, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.", "assets/bonnet2.jpeg", "m", "laine bio" ),
    new Bonnet("Bonnet en cashemire", 20, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.", "assets/bonnet3.jpeg", "m", "cashemire" ),
    new Bonnet("Bonnet arc en ciel", 12, "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.", "assets/bonnet4.jpeg", "m", "laine" )
];
?>