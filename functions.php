<?php

function bikeDetails(array $allBikes): string
{
    if (count($allBikes) == count($allBikes, COUNT_RECURSIVE)) {
        return 'No info, yo!';
    } else {
        $HTMLBikeCard = "";
        foreach ($allBikes as $bikes) {
            $HTMLBikeCard .= '<div class="bikeCards"><p class="bikeList"><ul><il class="bike"><h2>Name:</h2> ' . $bikes['bikeName'] . ' <h3>Brand and model:</h3> ' . $bikes['brand'] . ' ' . $bikes['model'] . ' <h3>Bike Type:</h3> ' . $bikes['bikeClass'] . '  ' . ' <h3>Condition:</h3> ' . $bikes['condition'] . '<h3>Colour:</h3>' . $bikes['colour'] . '</il></ul></p></div>';
        }
        return $HTMLBikeCard;
    }
}