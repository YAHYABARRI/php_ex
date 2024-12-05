<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
    Nombre 1: <input type="text" name="nombre1"><br>
    Nombre 2: <input type="text" name="nombre2"><br>
    <button type="submit">Calculer</button>
</form>
<?php
if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    $nombre1 = (int)$_GET['nombre1'];
    $nombre2 = (int)$_GET['nombre2'];
    $somme = $nombre1 + $nombre2;
    echo "La somme de $nombre1 et $nombre2 est : $somme<br>";
}
?>

</body>
</html>