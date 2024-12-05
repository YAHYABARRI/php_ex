<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    Fichier CSV : <input type="file" name="fichier"><br>
    <button type="submit">Charger</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
    $fichier = fopen($_FILES['fichier']['tmp_name'], 'r');
    $produits = [];
    while (($data = fgetcsv($fichier)) !== false) {
        $produits[] = ['nom' => $data[0], 'prix' => $data[1], 'quantite' => $data[2]];
    }
    fclose($fichier);

    echo "<table border='1'><tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($produits as $produit) {
        echo "<tr><td>{$produit['nom']}</td><td>{$produit['prix']}</td><td>{$produit['quantite']}</td></tr>";
    }
    echo "</table>";
}
?>

</body>
</html>