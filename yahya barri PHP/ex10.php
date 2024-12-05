<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Type de compte:
    <select name="type_compte">
        <option value="Administrateur">Administrateur</option>
        <option value="Utilisateur">Utilisateur</option>
    </select>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type_compte = htmlspecialchars($_POST['type_compte']);
    if ($type_compte === 'Administrateur') {
        echo "Bienvenue, administrateur !<br>";
    } else {
        echo "Bienvenue, utilisateur simple !<br>";
    }
}
?>

</body>
</html>