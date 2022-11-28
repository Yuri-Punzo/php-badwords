<?php
/* var_dump($array); */

$frase = $_GET["frase"];

$badword = $_GET["badword"];

echo "Frase: " . $frase . " Lunghezza: " . strlen($frase) . "<br>";

$newFrase = str_replace($badword, "***", $frase);

echo "Frase censurata: " . $newFrase . " Lunghezza: " . strlen($newFrase);
