<?php
require_once './functions.php';
$db = new PDO('mysql:host=db; dbname=rbicycles', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `bikeName`,`bikeClass`, `condition` FROM `bikes`');

$query->execute();

$allBikes = $query->fetchAll();

echo '<h1>My whips</h1>';

echo bikeDetails($allBikes);


//echo '<ul>';
//foreach($allBikes as $bikes) {
//    echo '<li>' . $bikes['bikeName'] . ' is a ' . $bikes['bikeClass'] . ' bike ' . ' and it\'s condition is ' . $bikes['condition'] . '</li>';
//}
//echo '</ul>';