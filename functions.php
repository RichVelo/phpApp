<?php

function bikeDetails(array $allBikes): string
{
    if (count($allBikes) == count($allBikes, COUNT_RECURSIVE)) {
        return 'No information held within the array or cannot access it';
    }
        $HTMLBikeCard = "";
        foreach ($allBikes as $bike) {
            $HTMLBikeCard .= '<div class="bikeCard"><ul><il class="bike"><h2>Name:</h2><p>'. $bike['bikeName'] . '</p><h3>Brand and model:</h3><p>' . $bike['brand'] . ' ' . $bike['model'] . '</p><h3>Bike Type:</h3><p>' . $bike['bikeClass'] . '</p><h3>Condition:</h3><p>' . $bike['condition'] . '</p><h3>Colour:</h3><p>' . $bike['colour'] . '</p></il></ul></div>';
        }
        return $HTMLBikeCard;
}