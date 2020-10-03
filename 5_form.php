<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>

    <form method="post">
        <h3>Formularz</h3>
        <div>
            <input type="text" name="firstname" placeholder="Imię">
        </div>
        <div>
            <input type="text" name="surname" placeholder="Nazwisko">
        </div>
        <div>
            <input type="number" name="birth_year" placeholder="Rok urodzenia">
        </div>
        <div>
            <input type="text" name="city" placeholder="Miasto">
        </div>
        <div>
            <input type="number" name="postcode" placeholder="Kod pocztowy (bez -)">
        </div>
        <div>
            <label for="color">Kolor: </label>
            <input type="color" id="color" name="color">
        </div>
        <hr>
        <input type="submit" value="Wyślij dane">
        <br/>
    </form>

    <?php
        $firstname = $surname = $birth_year = $city = $postcode = $color = null;
        if(!empty($_POST['firstname']))
            $firstname = validatePolishLetters(trim($_POST['firstname'])); // walidacja imienia
        if(!empty($_POST['surname']))
            $surname = validatePolishLetters(trim($_POST['surname'])); // walidacja nazwiska
        if(!empty($_POST['birth_year']))
            $birth_year = trim($_POST['birth_year']); // walidacja roku urodzenia
        if(!empty($_POST['city']))
            $city = validatePolishLetters(trim($_POST['city'])); // walidacja nazwy miasta
        if(!empty($_POST['postcode']))
            $postcode = substr($_POST['postcode'], 0, 2) . '-' . substr($_POST['postcode'], 2); // walidacja kodu pocztowego
        if(!empty($_POST['color']))
            $color = substr($_POST['color'], 1); // walidacja koloru

        if (empty($firstname) && empty($surname) && empty($birth_year) && empty($city) && empty($postcode) && empty($color)) // jeśli nic nie wpisano
            echo '<hr>' . '<b>Nie wprowadzono żadnych danych!</b><br>';
        // jeśli nie wypełniono poszczególnych pól
        elseif (empty($firstname))
            echo 'Nie wprowadzono imienia!' . '<br>';
        elseif (empty($surname))
            echo 'Nie wprowadzono nazwiska!' . '<br>';
        elseif (empty($birth_year))
            echo 'Nie wprowadzono roku urodzenia!' . '<br>';
        elseif (strlen(trim($birth_year)) != 4) // rok musi mieć cztery cyfry
            echo 'Wprowadzono nieprawidłowy rok urodzenia!';
        elseif (empty($city))
            echo 'Nie wprowadzono miasta!' . '<br>';
        elseif (empty($postcode))
            echo 'Nie wprowadzono kodu pocztowego!' . '<br>';
        elseif (strlen(trim($postcode)) != 6) // kod pocztowy musi mieć 6 znaków
            echo 'Wprowadzono nieprawidłowy kod pocztowy!';
        elseif (empty($color))
            echo 'Nie wybrano koloru!' . '<br>';
        else { // wyświetl wszystkie dane
            echo '<hr>' . '<p>Wprowadzone przez Ciebie dane:</p>';
            echo "Imię: $firstname" . '<br>';
            echo "Nazwisko: $surname" . '<br>';
            echo "Rok urodzenia: $birth_year" . '<br>';
            echo "Miasto: $city" . '<br>';
            echo "Kod pocztowy: $postcode" . '<br>';
            echo "Kolor: $color" . '<br>';
        }

        /**
         * Funkcja zamieniająca polskie litery na giwazdkę (*)
         * @param $input
         * @return string $replacedInput
         */
        function validatePolishLetters($input) {
            $polishLetters = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
            $replace = '*';
            $repolacedInput = str_replace($polishLetters, $replace, $input);

            return $repolacedInput;
        }
    ?>

</body>
</html>