<?php
$panier = [
    ['nom' => 'Produit A', 'quantite' => 2, 'prix' => 10],
    ['nom' => 'Produit B', 'quantite' => 1, 'prix' => 20],
    ['nom' => 'Produit C', 'quantite' => 3, 'prix' => 5]
];

$total = 0;
foreach ($panier as $item) {
    $total += $item['quantite'] * $item['prix'];
}
echo "Total du panier : $total €<br>";
?>
