<?php

require 'database.php';

$ID = $_GET["id"];

$sql = "SELECT * FROM recept WHERE id = $ID";

$result = mysqli_query($conn, $sql);
//zolang een rij gevuld kan worden wordt de loop uitgevoerd
$recept = mysqli_fetch_assoc($result);
?>

<?php echo $recept['titel']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recept.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@200&display=swap" rel="stylesheet">
    <title>recept</title>
</head>

<body>
    <?php include "nav.php";     
    ?>

</body>

</html>