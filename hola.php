<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Proyecto</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php
 
function HallarArea($base,$altura){

    return $base*$altura/2;
 }
 $base1=readline("Ingrese la base:");
 $altura1=readline("Ingre la altura:");
$Total=HallarArea(4, 4);
echo " El area es : $Total"
?>
</body>
</html>
