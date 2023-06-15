<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla{
            height: 60px;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: cover;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
    $colores = ["#a8e6cf", "#dcedc1", "#ffd3b6", "#ffaaa5", "#ff8b94"];
    ?>
    <div class="container">
    <h1>Practica 7 - Serpientes y escaleras</h1> <hr>
        <form action="">
        <div class="row">
            <?php
            for($i=100; $i>0; $i--){
                if($i == 4 || $i == 20 || $i == 38 || $i == 55 || $i == 72 || $i == 80 || $i == 88){
                    echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                }else if
                    ($i == 17 || $i == 33 || $i == 58 || $i == 71 || $i == 63 || $i == 97){
                        echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                    } else{
                echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
            }  }
            ?>
        </form>
    </div>
    </div>
</body>
</html>