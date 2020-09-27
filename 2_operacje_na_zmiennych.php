<?php

// operatory bitowe
// and &, or |, not ~, xor ^, przesunięcie bitowe <<, >>

    $x = 0b1010;
    $x = $x << 2; // 1010 -> 101000 => 40 (10)
    $x = $x >> 1; // 10100 (2) -> 20 (10)
    echo "$x<br>";

// porównananie === <=>

    $x = 1;
    $y = 1.0;

    if ($x == $y) {
        echo '$x jest równa $y<br>';
    } else {
        echo '$x nie jest równa $y<br>';
    }

    if ($x === $y) {
        echo '$x jest identyczna $y<br>';
    } else {
        echo '$x nie jest identyczna $y<br>';
    }

    echo gettype($x); // integer
    echo gettype($y) . '<hr>'; // double

    $x = -10;
    $y = 1;

    echo $x<=>$y;
    echo '<hr>';

    $x=1;
    $x=$x++;
    echo $x; // 1
    $x=++$x;
    echo $x; // 2
    $y=$x++;
    echo $x; // 3
    echo $y; // 2
    $y=++$x*2-1;
    echo $x; // 4
    echo $y; // 7
    echo '<hr>';
// operatory rzutowania
// bool, int, float, string, array, object, unset

    $x = '123abc45'; //string
    echo "$x<br>";
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';
    $x = (int)$x; // integer
    echo "$x<br>";
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';

    $x = 0; //string
    echo "$x<br>";
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';
    $x = (bool)$x; // bool
    echo "$x<br>"; // false
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';

    $x = 10; //string
    echo "$x<br>";
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';
    $x = (float)$x; // float
    echo "$x<br>"; // float
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';

    $x = 10; //string
    echo "$x<br>";
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';
    $x = (unset)$x; // unset
    echo "$x<br>"; //
    echo 'Typ danych $x: ' . gettype($x) . '<hr>';

// rozmiar typu integer
    echo PHP_INT_SIZE, '<hr>';

// kontrola typu zmiennych
// is_int(), is_float(), is_numeric(), is_bool(), is_null()
    $x = 1;
    echo is_numeric($x) . '<br>';

    $w;
    // operator ignorowania błędów
    echo @gettype($w);

    // stała predefiniowana
    echo PHP_VERSION . '<br>';
    $ver = PHP_VERSION;
    if ($ver > 7.3) {
        echo 'Nowa wersja PHP';
    } else
        echo 'Stara wersja PHP';

    echo '<hr>';
    // stałe
    // nazwy z wielkich liter

    define('NAME', 'Janusz');
    echo NAME;
?>