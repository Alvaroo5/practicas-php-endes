<?php

$numero1 = $_GET['numero1']; 
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

echo "$numero1 $numero2 $numero3";

if ($numero1 > $numero2) {
    if ($numero1 > $numero3) {
        echo " El mayor es " . $numero1;
    }else{
    echo " El mayor es " . $numero3;
    }
}else{
    if ($numero2 > $numero3) {
        echo " El mayor es " . $numero2;
    }else {
        echo " El mayor es " . $numero3;
    }
}

?>
