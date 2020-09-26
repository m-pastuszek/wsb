<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    Pierwszy plik <hr>
    <?php
    $name = 'Anna';
    // konkatenacja .
    echo "Imię: $name";

    // składnia heredoc
    /* #1
    $text = <<<LABEL
        Imię: $name
LABEL;
    echo $text;

    // #2
    echo <<<L
    Heredoc 2 <hr/>
    L;
    */

    // składnia nowdoc
    echo <<<'L'

L;

    // integer
    $bin = 0b1010; //10
    $oct = 011;     //9
    $hex = 0x11; //17

    $city = 'Poznań';
    echo "Nazwa zmiennej: \$city, wartość: $city";

    $x = true;

    // wersja PHP
    echo PHP_VERSION;






    ?>
</body>
</html>