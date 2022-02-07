<?php

function bikeDetails(array $allBikes) {
    $returnedHTML = "";
    foreach($allBikes as $bikes) {
        $returnedHTML .= '<p>' . $bikes['bikeName'] . ' is a ' . $bikes['colour'] . ' ' . $bikes['bikeClass'] . ' bike ' . ' and it\'s condition is ' . $bikes['condition'] . '</p>';
    }
    return $returnedHTML;
}