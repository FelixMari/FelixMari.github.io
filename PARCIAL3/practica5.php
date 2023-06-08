<?php
$cuadros = $_POST["cuadro"];
for ($i=0; $i<count($cuadros); $i++){
    echo $cuadros[$i].",";
    if($cuadros[$i] !="X" && $cuadros[$i] !="O"){
        echo "<h2> Solo se permiten O y/o X </h2>";
        return;
    }
}
/*
[ 0 ][ 1 ][ 2 ]
[  ][  ][  ]
[  ][  ][  ]
*/
if($cuadros[0] =="X" && $cuadros[1] =="X" && $cuadros[2] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(0, 1, 2, $cuadros);
    return;
}else if ($cuadros[0] =="O" && $cuadros[1] =="O" && $cuadros[2] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(0, 1, 2, $cuadros);
    return;
}
/*
[  ][  ][  ]
[ 3 ][ 4 ][ 5 ]
[  ][  ][  ]
*/
if($cuadros[3] =="X" && $cuadros[4] =="X" && $cuadros[5] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(3, 4, 5, $cuadros);
    return;
}else if ($cuadros[3] =="O" && $cuadros[4] =="O" && $cuadros[5] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(3, 4, 5, $cuadros);
    return;
}
/*
[  ][  ][  ]
[  ][  ][  ]
[ 6 ][ 7 ][ 8 ]
*/
if($cuadros[6] =="X" && $cuadros[7] =="X" && $cuadros[8] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(6, 7, 8, $cuadros);
    return;
}else if ($cuadros[6] =="O" && $cuadros[7] =="O" && $cuadros[8] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(6, 7, 8, $cuadros);
    return;
}
/*
[ 0 ][  ][  ]
[ 3 ][  ][  ]
[ 6 ][  ][  ]
*/
if($cuadros[0] =="X" && $cuadros[3] =="X" && $cuadros[6] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(0, 3, 6, $cuadros);
    return;
}else if ($cuadros[0] =="O" && $cuadros[3] =="O" && $cuadros[6] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(0, 3, 6, $cuadros);
    return;
}
/*
[  ][ 1 ][  ]
[  ][ 4 ][  ]
[  ][ 7 ][  ]
*/
if($cuadros[1] =="X" && $cuadros[4] =="X" && $cuadros[7] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(1, 4, 8, $cuadros);
    return;
}else if ($cuadros[1] =="O" && $cuadros[4] =="O" && $cuadros[7] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(1, 4, 8, $cuadros);
    return;
}
/*
[  ][  ][ 2 ]
[  ][  ][ 5 ]
[  ][  ][ 8 ]
*/
if($cuadros[2] =="X" && $cuadros[5] =="X" && $cuadros[8] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(2, 5, 8, $cuadros);
    return;
}else if ($cuadros[2] =="O" && $cuadros[5] =="O" && $cuadros[8] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(2, 5, 8, $cuadros);
    return;
}
/*
[ 0 ][  ][  ]
[  ][ 4 ][  ]
[  ][  ][ 8 ]
*/
if($cuadros[0] =="X" && $cuadros[4] =="X" && $cuadros[8] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(0, 4, 8, $cuadros);
    return;
}else if ($cuadros[0] =="O" && $cuadros[4] =="O" && $cuadros[8] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(0, 4, 8, $cuadros);
    return;
}
/*
[  ][  ][ 2 ]
[  ][ 4 ][  ]
[ 6 ][  ][  ]
*/
if($cuadros[2] =="X" && $cuadros[4] =="X" && $cuadros[6] =="X"){
    echo"<h1> Ganador X </h1>";
    echo LineaGanadora(2, 4, 6, $cuadros);
    return;
}else if ($cuadros[2] =="O" && $cuadros[4] =="O" && $cuadros[6] =="O"){
    echo"<h1> Ganador O </h1>";
    echo LineaGanadora(2, 4, 6, $cuadros);
    return;
}
function LineaGanadora($p1, $p2, $p3, $cuadros){
    $color = 'background-color: pink; border: 1px solid black; padding: 2px;';
    for($i=0; $i<9; $i++){
        if($i == $p1 || $i == $p2 || $i == $p3){
            echo "<span style= 'color: black;".$color."'>".$cuadros[$i]."</span>";
        }else {
            echo"<span>".$cuadros[$i]."</span>";
        }
        if($i == 2 || $i == 5)echo "<br>";
    }
}
?>