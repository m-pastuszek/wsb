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

?>