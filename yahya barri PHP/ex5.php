<?php
$pays = [
    'France' => 67000000,
    'Allemagne' => 83000000,
    'Espagne' => 47000000
];
arsort($pays);
foreach ($pays as $nom => $population) {
    echo "Pays : $nom, Population : $population<br>";
}
?>
