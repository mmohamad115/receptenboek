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
        <div class="gallery">
            <ul class="controls">
                <li class="buttons active" data-filter="all">All</li>
                <li class="buttons" data-filter="langeste">Langeste</li>
                <li class="buttons" data-filter="makkelijkste">Makkelijkste</li>
                <li class="buttons" data-filter="meeste">Meeste</li>
            </ul>
        </div>
        <div class="image-container">
            <?php foreach ($recept as $recept):?>
            <div class="tomato">
                <a href="database.php"><img class="images" src="images/<?php echo $recept ["foto"]?>"></a>
                <p><?php echo $recept ["titel"]?></p>
            </div>
        <? endforeach ?>
        </div>
    </main>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.images').show(400);
        }else{
            $('.images').not('.'+filter).hide(200)
            $('.images').filter('.'+filter).show(400)
        }


    });
});
</script>
</body>
</html>