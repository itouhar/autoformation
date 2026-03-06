<?php
$teas = 7;
$price = 5;
$student = true;

$total = $teas * $price;

if ($teas > 5) $total -= $teas;
if ($student) $total *= 0.80;

echo "Total : $total DH";
?>