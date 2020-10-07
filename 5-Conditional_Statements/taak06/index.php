<?php
$getal1 = 12;

if($getal1 < 13 && $getal1 > 6) {
    echo "het getal zit tussen 13 en 6!";
} else {
    echo "het getal is groter dan 13 of kleiner dan 6!";
}

if($getal1 < 13 || $getal1 > 6) {
    echo "<br>het getal is kleiner dan 13<br/>";
} else {
    echo "het getal is groter dan 13";
}

if($getal1 < 13  xor $getal1 > 6) {
    echo "<br>het getal is kleiner dan 13<br/>";
} else {
    echo "het getal is groter dan 6";
}

