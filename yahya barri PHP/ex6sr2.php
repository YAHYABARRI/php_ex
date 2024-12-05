<?php
$villes = [
    'Paris' => 25,
    'Londres' => 22,
    'Berlin' => 28,
    'Madrid' => 30
];
arsort($villes);
$ville_max = array_key_first($villes);
echo "Ville avec la température la plus élevée : $ville_max ({$villes[$ville_max]}°C)<br>";
?>
