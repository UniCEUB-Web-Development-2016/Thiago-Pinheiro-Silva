<?php

include "Math.php";

$radius = $_POST['radius'];
$adjacentCathetus = $_POST['adjacent'];
$oppositeCathetus = $_POST['opposite'];

$calculator = new Math();

echo "Circle Area = ".$calculator->circle_area($radius);
echo "<br>";
echo "Hypotenuse = ".$calculator->hypotenuse($adjacentCathetus,$oppositeCathetus);