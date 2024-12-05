<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="checkbox" name="produits[]" value="Produit A,10">Produit A (10 €)<br>
    <input type="checkbox" name="produits[]" value="Produit B,20">Produit B (20 €)<br>
    <input type="checkbox" name="produits[]" value="Produit C,15">Produit C (15 €)<br>
    <button type="submit">Soumettre</button>
</form>
<?php
if (isset($_POST['produits'])) {
    $total = 0;
    foreach ($_POST['produits'] as $produit) {
        list($nom, $prix) = explode(',', $produit);
        $total += $prix;
        echo "Produit sélectionné : $nom<br>";
    }
    echo "Prix total : $total €<br>";
}
?>

</body>
</html>