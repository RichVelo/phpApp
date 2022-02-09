<?php

function bikeDetails(array $allBikes): string
{
    if (count($allBikes) == count($allBikes, COUNT_RECURSIVE)) {
        //checking that there is an array within an array to play with and then if not:
        return 'There is a problem with the array - it should be an array within an array which provides the information from the db';
    }
        $HTMLToDisplayBikeInfo = "";
        foreach ($allBikes as $bike) {
            $HTMLToDisplayBikeInfo .= '<div class="bikeCard"><h2>Name:</h2><p>'. $bike['bikeName'] . '</p><h3>Brand and model:</h3><p>' . $bike['brand'] . ' ' . $bike['model'] . '</p><h3>Bike Type:</h3><p>' . $bike['bikeClass'] . '</p><h3>Condition:</h3><p>' . $bike['condition'] . '</p><h3>Colour:</h3><p>' . $bike['colour'] . '</p></div>';
        }
        return $HTMLToDisplayBikeInfo;
}