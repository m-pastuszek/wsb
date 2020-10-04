<?php

$x = 10;

function change() {
    echo "Wartość \$x w funkcji wynosi: $GLOBALS[x]";
}

change();

// zmienne statyczne
function add() {
    $x = 4;
    $x += 10;
    echo "<br>Zmienna \$x w funkcji wynosi: $x";
}
add(); // 14

function addStatic() {
    static $x = 4; // zmienna statyczna
    $x += 10;
    echo "<br>Zmienna /$x wynosi: $x";
}

addStatic(); //14
addStatic(); //24

// przekazywanie argumentów przez wartość
 function addThree($x) {
     $x += 3;
 }

 $num = 10;
 echo "<br>Zmienna \$num: $num";
 addThree($num);
echo "<br>Zmienna \$num: $num";

// przekazywanie argumentów przez referencję &
function addRef(&$x) {
    $x += 3;
}

$num = 10;
echo "<br>Zmienna \$num: $num"; // 10
addRef($num);
echo "<br>Zmienna \$num: $num"; // 13
addRef($num);
echo "<br>Zmienna \$num: $num"; //16
addRef($num);
echo "<br>Zmienna \$num: $num"; // 19

echo '<hr>';
// argumenty domyślne
function multi($x, $y=4) {
    return $x = $y;
}
$a = 3;
echo multi(2,4);
echo multi($a);


?>