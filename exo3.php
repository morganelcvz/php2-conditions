<?php 

$age = 25 ; 
$genre = "femme";


if ($age >= 18) {
    if ($genre == "homme") {
        echo "vous êtes un homme majeur.";
    } else {
        echo "vous êtes un femme majeure.";
    }
} elseif ($age < 18) {
    if ($genre == "homme") {
        echo "vous êtes un homme mineur.";
    } else {
        echo "vous êtes un femme mineure.";
    } 
}

