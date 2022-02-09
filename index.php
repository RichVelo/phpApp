<?php
require_once './functions.php';
$db = new PDO('mysql:host=db; dbname=rbicycles', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `bikes`');
$query->execute();
$allBikes = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Richie's Whips</title>
</head>
<body>
    <header>
        <h1>Richie's whips</h1>
    </header>
    <main>
        <section class="bikeContainer">
            <?= bikeDetails($allBikes)?>;
        </section>
    </main>
</body>
</html>

