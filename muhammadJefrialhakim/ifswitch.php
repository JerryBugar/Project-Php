<?php
$username = "jefri"; //if else string
$hoby = "programmer";
$nomor = 120;
$angka = 5;

if ($username == "jefri") { //if else string
    echo "jefri progreammer";
    echo "<br>";
    echo "seluncur bebas uhuy";
} else {
    echo "Username tidak valid";
    echo "<br>";
    echo "nama yg bener kroco";
}


if ($hoby == "programmer") { //if else string
    echo "<br>";
    echo "jefri high iq";
} elseif ($hoby == "gamer") {
    echo "<br>";
    echo "jefri gamer";
} else {
    echo "jefri bukan programmer";
}

switch ($nomor) { //switch angka
    case 100:
        echo "<br>";
        echo "nomor 100";
        break;
    case 120:
        echo "<br>";
        echo "nomor 120";
        break;
    default:
        echo "nomor tidak valid";
}

switch ($angka) { //switch angka kondisi banyak
    case 2:
    case 4:
    case 6:
    case 8:
        echo "<br>";
        echo "angka genap";
        break;
    case 1:
    case 3:
    case 5:
    case 7:
        echo "<br>";
        echo "angka ganjil";
        break;                
    default:
        echo "<br>";
        echo "angka tidak valid";
}



?>