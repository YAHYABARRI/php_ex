<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $age = $_POST['age'];

    if (filter_var($age, FILTER_VALIDATE_INT) && $age > 0) {
        echo "Bienvenue, $nom, vous avez $age ans !<br>";
    } else {
        echo "Erreur : Veuillez entrer un âge valide (entier positif).<br>";
    }
}
?>
