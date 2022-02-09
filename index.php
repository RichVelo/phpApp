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
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700;800&display=swap" rel="stylesheet">
    <title>Richie's Whips</title>
</head>
<body>
    <header>
        <h1>Richie's whips</h1>
    </header>
    <main>
        <section class="bikeContainer">
            <?= bikeDetails($allBikes)?>
        </section>
    </main>
</body>
</html>

