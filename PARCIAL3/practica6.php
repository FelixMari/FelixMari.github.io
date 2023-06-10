<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del ahorcado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color: pink; ">
    <?php
    $nombre = $_POST["jugador"];
    $palabra = $_POST["palabra"];
    $vidas = $_POST["vidas"];
    $b = false;
    $frase = $_POST["frase"];

    if(isset($_POST["frase"])){
        $frase = $_POST["frase"];
        $letra=$_POST["letra"];
        for($i=0 ; $i<count(str_split($palabra));$i++){
            if($palabra[$i] == $letra){
                $frase[$i] = $letra;
                $b = true; } }
        if(!$b){
            echo "<h4>La letra -".$letra."- no está en la palabra :b</h4>";
            $vidas--; }
        if($vidas <= 0){
            echo "<h1>Perdiste, ¡se agotaron tus vidas!</h1>";
            echo "<img src='gameover.png' width='15%'><hr>";
            echo "<a href='practica6.html'>Regresar al inicio</a>";
            return; }
        $terminado = false;
        for($j=0 ; $j<count(str_split($palabra)); $j++){
            if(!$frase[$j]){
                $terminado = true; } }
        if($terminado == false){
            echo "<h1>¡Ganaste!, eres un genio.</h1>";
            echo "<img src='ganador.png' width='15%'><hr>";
            echo "<a href='practica6.html'>Regresar al inicio</a>";
            return; } } ?>
    <div class="container">
    <form action="practica6.php" method="POST">
            <input type="hidden" value="<?php echo $nombre ?>" name="jugador">
            <input type="hidden" value="<?php echo $palabra ?>" name="palabra">
            <input type="hidden" value="<?php echo $vidas ?>" name="vidas">

        <div class="row">
            <h1>Juego del ahorcado</h1><hr>
            <h3>Nombre del jugador: <?php echo $nombre; ?> </h3>
            <h4>Vidas: <?php echo $vidas; ?> </h4>
            <?php
            $letras = str_split($palabra);
            for($i=0; $i<(count($letras)); $i++){
                echo "<input type='text' name='frase[]' style='width: 5%;' value='".$frase[$i]."'>";}
            ?>
        </div>
            <div class="row mt-4">
                <input type="text" name="letra" style="width: 10%;" name="letra" maxlength="1" required>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Enviar letra" style="width: 10%; background-color: brown;">
            </div>
    </div>
</body>
</html>