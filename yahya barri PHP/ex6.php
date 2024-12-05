<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Nom: <input type="text" name="nom"><br>
    Âge: <input type="text" name="age"><br>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $age = (int)$_POST['age'];
    echo "Bienvenue, $nom, vous avez $age ans !<br>";
}
?>

</body>
</html>