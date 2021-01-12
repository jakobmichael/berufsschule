<?php
echo "Programm zur Umwandlung einer Dezimalzahl in eine Dualzahl mit dem Restwertverfahren";
echo "<hr>";

$ausgangswert = 5;
$zahl = $ausgangswert;
$dualzahl = "" ;

if($ausgangswert < 0) {
    echo "Das Programm wurde beendet, da ein negativer Eingabewert nicht verarbeitet werden kann.";
    echo "<br>";
    echo "Bitte geben Sie einen positiven Ausgangswert ein und starten Sie das Programm erneut!";
} else {

    while($zahl > 0) {
        $dualzahl = (string) $zahl % 2 . $dualzahl;
        $zahl = floor($zahl / 2); 
    }
    
    echo "Die Dezimalzahl " . $ausgangswert . " als Dualzahl wurde berechnet als: ". $dualzahl;
}
