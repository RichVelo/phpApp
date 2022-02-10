<?php
require_once './functions.php';
$db = new PDO('mysql:host=db; dbname=rbicycles', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST['bikeName']) && isset($_POST['bikeClass']) && isset($_POST['suspensionType']) && isset($_POST['idealSurface']) && isset($_POST['condition']) && isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['colour'])) {
    if (empty ($_POST["bikeName"]) || ($_POST["bikeClass"]) || ($_POST["suspensionType"]) || ($_POST["idealSurface"]) || ($_POST["condition"]) || ($_POST["brand"]) || ($_POST["model"]) || ($_POST["colour"])) {
        $errMsg = "Please enter data into all fields.";
        echo $errMsg;
    } else {
        $query = $db->prepare('INSERT INTO `bikes` (`bikeName`, `bikeClass`, `suspensionType`, `idealSurface`, `condition`, `brand`, `model`, `colour`) 
                                     VALUES (:bikeName, :bikeClass, :suspensionType, :idealSurface, :condition, :brand, :model, :colour)');
        $query->execute([':bikeName' => $_POST['bikeName'], ':bikeClass' => $_POST['bikeClass'], ':suspensionType' => $_POST['suspensionType'], ':idealSurface' => $_POST['idealSurface'], ':condition' => $_POST['condition'], ':brand' => $_POST['brand'], ':model' => $_POST['model'], ':colour' => $_POST['colour']]);
    }
}

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
        <h1>Richie's excellent collection of bikes</h1>
    </header>
    <main>
        <section class="bikeContainer">
            <?= bikeDetails($allBikes)?>
        </section>
        <section class="newBike">
            <h2>N+1</h2>
            <h3>Add more bikes here</h3>
            <div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input class="bikeName input" name="bikeName" placeholder="Give the bike a name" required="true">
                    <input class="bikeClass input" name="bikeClass" placeholder="What type of bike is it? " required="true">
                    <input class="suspensionType input" name="suspensionType" placeholder="Suspension type" required="true">
                    <input class="idealSurface input" name="idealSurface" placeholder="What should it be ridden on?" required="true">
                    <input class="condition input" name="condition" placeholder="What condition is the bike in?" required="true">
                    <input class="brand input" name="brand" placeholder="What brand is the bike?" required="true">
                    <input class="model input" name="model" placeholder="What model is it?" required="true">
                    <input class="colour input" name="colour" placeholder="What colour is the bike?" required="true">
                    <input class="submit" type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
