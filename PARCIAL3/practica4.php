<?php

$nombre = $_POST["nombre"];
$calificacion = 0;

$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];

echo "<h2>Nombre del alumno: ".$nombre."</h2>";

echo "<h3> Pregunta 1, respuesta seleccioada: (".$pregunta1.")</h3>";

if($pregunta1 == "c"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (c)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 2, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta2 == "a"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (a)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 3, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta3 == "b"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (b)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 4, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta4 == "a"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (a)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 5, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta5 == "c"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (c)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 6, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta6 == "b"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (b)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 7, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta7 == "c"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (c)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 8, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta8 == "c"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (c)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 9, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta9 == "b"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (b)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}
echo "<h3> Pregunta 10, respuesta seleccioada: (".$pregunta1.")</h3>";
if($pregunta10 == "c"){
    $calificacion ++;
    echo "<img src='buena.png' width='4%'><hr>";
} else{
    echo"<p> La respuesta es (c)</p>";
    echo "<img src='mala.png' width='4%'><hr>";
}

if($calificacion >= 0 && $calificacion <= 5){
    echo"<h3>Calificacion:".$calificacion.", no aprobado.</h3>";
    echo "<img src='reprobado.png' width='10%'><hr>";
}else if($calificacion >= 6 && $calificacion <= 8){
        echo"<h3>Calificacion:".$calificacion.", aprobado.</h3>";
        echo "<img src='aprobado.png' width='10%'><hr>";
    } else if($calificacion >= 9 && $calificacion <= 10){
        echo"<h3>Calificacion:".$calificacion.", excelente.</h3>";
        echo "<img src='aprobado.png' width='10%'><hr>";}
?>