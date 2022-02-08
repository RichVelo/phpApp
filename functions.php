<?php

function bikeDetails(array $allBikes): string
{
    if (count($allBikes) == count($allBikes, COUNT_RECURSIVE)) {
        return 'No info, yo!';
    }
        $HTMLBikeCard = "";
        foreach ($allBikes as $bikes) {
            $HTMLBikeCard .= '<div class="bikeCard"><ul><il class="bike"><h2>Name:</h2> ' . '<p>'. $bikes['bikeName'] . '</p>' . '<h3>Brand and model:</h3> ' . '<p>' . $bikes['brand'] . ' ' . $bikes['model'] . '</p>' . ' <h3>Bike Type:</h3> ' . '<p>' . $bikes['bikeClass'] . '</p>' . ' <h3>Condition:</h3> ' . '<p>' . $bikes['condition'] . '</p>' . '<h3>Colour:</h3>' . '<p>' . $bikes['colour'] . '</p>' . '</il></ul></div>';
        }
        return $HTMLBikeCard;
}