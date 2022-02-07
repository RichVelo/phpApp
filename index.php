<?php

$db = new PDO('mysql:host=db; dbname=rbicycles', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `bikeName`,`bikeClass`, `condition`, `colour` FROM `bikes`');

$query->execute();

$allBikes = $query->fetchAll();

echo '<h1>My whips</h1>';

echo '<ul>';
foreach($allBikes as $bikes) {
    echo '<li>' . $bikes['bikeName'] . ' is a ' . $bikes['bikeClass'] . ' bike, ' . 'it\'s ' . $bikes['colour'] . ' coloured' .  ' and it\'s condition is ' . $bikes['condition'] . '</li>';
}
echo '</ul>';