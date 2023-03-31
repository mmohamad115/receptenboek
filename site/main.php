<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM recept";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <title>main</title>
</head>

<body>
    <main>
        <div>
            <img class="background" src="images/greek food background.jpg">
            <h1 class="title">Griekse Receptenboek</h1>
            <h3 class="zoek">Zoek recepten hier</h3>
            <div class="box">
                <input type="text" placeholder="search">
                <i class="fa-solid fa-magnifying-glas"></i>
            </div>
        </div>
        <h1 class="recepten">Onze recepten:</h1>
        <?php foreach ($recept as $recept) : ?>
            <div class="tomato">
                <a href="recept.php?id=<?php echo $recept["id"] ?>"><img class="images" src="images/<?php echo $recept["foto"] ?>"></a>
                <p><?php echo $recept["titel"] ?></p>
            </div>
        <? endforeach ?>
    </main>
</body>

</html>