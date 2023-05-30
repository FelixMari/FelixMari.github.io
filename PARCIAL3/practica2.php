<?php 
$nombre = $_GET["nombre"];
echo "Nombre: " .$nombre ."<br><br>";

$edad = $_GET["edad"];
echo "Edad: " .$edad  ."<br><br>";

$escuela = $_GET["escuela"];
echo "Escuela: " .$escuela ."<br><br>";

$fechaingreso = $_GET["fechaingreso"];
echo "Fecha de ingreso: " .$fechaingreso ."<br><br>";

$direccion = $_GET["direccion"];
echo "Direccion: " .$direccion ."<br><br>";

if($edad >= 18){
    echo "Es mayor de edad" ."<br><br>";
} else {
    echo "Es menor de edad" ."<br><br>";
}

if($escuela == "cetis"){
    echo "<div style='background-color:indigo;'> CETIS 107 </div>" ."<br><br>";
} else if ($escuela == "cobaes"){
    echo "<div style='background-color:red;'> COBAES 26 </div>" ."<br><br>";
} else if ($escuela == "cbtis"){
    echo "<div style='background-color:green;'> CBTIS 224 </div>" ."<br><br>";
}
?>