<?php
echo "rok-miesiac-dzien: ".date("Y-m-d") . '<br>';
echo "rok-miesiac-dzien: ".date("Y-M-d") . '<br>';
echo date("G:i:s") . '<br>';
echo date("Y-m-d G:i:s") . '<br>';
echo date("w") . '<br>';

$data = getdate();
echo '<pre>';
    print_r($data);
echo '</pre>';

// wyświetl date w następującym formacie: 4 października 2020 | niedziela
echo "Funkcja date()<br>";
echo date("j F Y | l");
echo '<hr>';

echo "Funkcja setlocale()<br>";
setlocale(LC_TIME, 'pl');
echo strftime("%e %B %Y | %A");
