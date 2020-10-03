<?php
    $text = <<<TEXT
        wsb - Wyższa
        szkoła
        bankowa
TEXT;

    // Sanityzacja kodu
    echo $text, '<hr>';
    echo nl2br($text);

    echo $text, '<br>';
    echo strtolower($text) . '<br>';
    echo strtoupper($text) . '<br>';
    echo ucfirst($text) . '<br>';
    echo ucwords($text) . '<br>';

    $name = 'jAnUsz';
    $name = ucfirst(strtolower($name));
    echo $name, '<hr>';

// białe znaki
    $name = 'Kasia';
    $name1 = '  Kasia ';

    echo strlen($name); // 5
    echo strlen($name1), '<br>'; // 8
    echo strlen(ltrim($name1)); // 6
    echo strlen(rtrim($name1)); // 7
    echo strlen(trim($name1)); // 5

    $name1 = trim($name1);
    echo strlen($name1); // 5

// przeszukiwanie danych
    $text = 'Poznań, ul. Rynek Jeżycki 13, tel. 61 627 00 00';
    $search = strstr($text, 'tel');
    echo $search; // tel. 61...

    $search = stristr($text, 'Tel'); // bez względu na wielkość liter
    echo $search; // tel. 61...

    $search = stristr($text, 'Tel', true); // depracated in PHP 8
    echo '<hr>';

// czyszczenie zawartości bufora
    ob_clean();

// zad. 1
// znajdź domenę pobraną od użytkownika

//przetwarzanie ciągów znaków
    $replace = str_replace('%name%', 'Janusz', 'Masz na imię: %name%');
    echo $replace . '<br/>';

    $surname = substr('Katarzyna Nowak', 3);
    echo  $surname; // arzyna Nowak

    $surname = substr('Katarzyna Nowak', 3, 5);
    echo $surname; // arzyn
    echo '<hr>';
    $name = 'Mirosław';
    $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $correctName = str_replace($censure, $replace, $name);
    echo 'Dane przed poprawą: ' . $name . '<br>';
    echo 'Dane po poprawie: ' . $correctName;

?>