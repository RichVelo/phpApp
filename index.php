<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
require_once './functions.php';
$db = new PDO('mysql:host=db; dbname=rbicycles', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `bikes`');

$query->execute();

$allBikes = $query->fetchAll();

?>

<html>


<header class="pageTitle"><h1>Richie's whips</h1></header>
<main>
    <section class="container">
        <?= bikeDetails($allBikes)?>;
    </section>
</main>

</html>

