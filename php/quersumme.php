<?php
echo "Programm zur Berechnung der Quersumme";
echo "<hr>";
echo "<br>";

$ausgangswert = 5324;
$zahl = $ausgangswert;
$quersumme = 0;
$schleife = 1;
while($zahl > 0) {
    $quersumme = $quersumme + $zahl % 10;
    echo "Die Stelle " . $schleife . " der Zahl " . $ausgangswert . " ist " . $zahl % 10 . "<br>";
    $schleife ++;
    $zahl = floor($zahl / 10);


}
echo "<hr>";
echo "Die Quersumme von " . $ausgangswert . " ist:" .$quersumme;
