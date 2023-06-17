<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla{
            height: 80px;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .ficha{
            background-image: url('ficha.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Practica 7 - Serpientes y escaleras</h1> <hr>
        <form action="practica7.php" method="POST">
            <input type="submit" value="juEgAr" class="btn btn-success"> <hr>
        <div class="row">
            <?php
             $colores = ["#a8e6cf", "#dcedc1", "#ffd3b6", "#ffaaa5", "#ff8b94"];
             if(isset($_POST["casilla"])){
                $dado = rand(1,12);
                echo "<h2> Resultado del dado = ".$dado."</h2>";
                $casilla = $dado + intval($_POST["casilla"]);
                echo "<h3>El jugador estaba en la casilla: ".intval($_POST["casilla"])." y pasó a la casilla: ".$casilla."</h3>";
                if($casilla >= 100){
                    echo "<h1> El jugador ganó </h1>";
                    $casilla = 100;
                }
                //escaleras
                if($casilla == 4){
                    $casilla = 15;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 15 </h4>";
                }
                if($casilla == 20){
                    $casilla = 31;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 31 </h4>";
                }
                if($casilla == 38){
                    $casilla = 49;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 49 </h4>";
                }
                if($casilla == 55){
                    $casilla = 66;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 66 </h4>";
                }
                if($casilla == 72){
                    $casilla = 83;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 83 </h4>";
                }
                if($casilla == 80){
                    $casilla = 91;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 91 </h4>";
                }
                if($casilla == 88){
                    $casilla = 99;
                    echo "<h4> El jugador encontró una escalera y subió hasta la casilla 99 </h4>";
                }
                //serpientes
                if($casilla == 17){
                    $casilla = 6;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 6 </h4>";
                }
                if($casilla == 33){
                    $casilla = 22;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 22 </h4>";
                }
                if($casilla == 58){
                    $casilla = 47;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 47 </h4>";
                }
                if($casilla == 63){
                    $casilla = 52;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 52 </h4>";
                }
                if($casilla == 71){
                    $casilla = 60;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 60 </h4>";
                }
                if($casilla == 97){
                    $casilla = 86;
                    echo "<h4> El jugador encontró una serpiente y bajó hasta la casilla 86 </h4>";
                }
             } else{
                $casilla = 0;
             }
            for($i=100; $i>0; $i--){
                if($casilla == $i){
                    echo "<div class='col-1 card m-1 casilla ficha' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                } else if($i == 4 || $i == 20 || $i == 38 || $i == 55 || $i == 72 || $i == 80 || $i == 88){
                    echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                } else if ($i == 17 || $i == 33 || $i == 58 || $i == 71 || $i == 63 || $i == 97){
                        echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                } else { echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>"; 
                }  
            }
            ?>
             <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
        </form>
    </div>
    </div>
</body>
</html>