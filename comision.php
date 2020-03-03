<?php
 $ventas=$_POST['V1'];
 if ($ventas<=150) {
 	$comision=0;
 	echo "Comision = $comision";
 }elseif ($ventas>150 && $ventas<=400) {
 	$comision=$ventas*0.1;
 	echo "Comision = $comision";
 }elseif ($ventas>400){
 	$comision=($ventas*0.09)+50;
 	echo "Comision = $comision";
 }
?>
