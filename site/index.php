<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM recept";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$recept = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@200&display=swap" rel="stylesheet">
    <title>Mijn Restaurant</title>
</head>
<body>
    <?php include "header.html"; 
    ?>
    <?php include "main.html";
    ?>
    <?php foreach ($recept as $recept):?>
    <div class="tomato">
        <a href="#"></a><img class="images" src="images/<?php echo $recept ["afbeelding"]?>">
        <p><?php echo $recept ["naam"]?></p>
    </div>
    <? endforeach ?>
</body>
</html>