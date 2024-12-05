<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Nom de l'employé : <input type="text" name="nom_employe">
    <button type="submit">Rechercher</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employes = [
        'Alice' => ['poste' => 'Développeur', 'salaire' => 4000],
        'Bob' => ['poste' => 'Designer', 'salaire' => 3500],
        'Charlie' => ['poste' => 'Manager', 'salaire' => 5000]
    ];
    $nom = htmlspecialchars($_POST['nom_employe']);

    if (array_key_exists($nom, $employes)) {
        echo "Nom : $nom<br>Poste : " . $employes[$nom]['poste'] . "<br>Salaire : " . $employes[$nom]['salaire'] . " €<br>";
    } else {
        echo "Employé non trouvé.<br>";
    }
}
?>

</body>
</html>