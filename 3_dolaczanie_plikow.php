<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    Początek pliku
    <?php
    $name = 'Anna';
        include '.\3_files\file.php';
        include_once '.\3_files\file.php';
        require '.\3_files\file.php';
    ?>
    Koniec pliku
</body>
</html>