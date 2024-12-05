<?php
$etudiants = [
    'Alice' => ['Maths' => 15, 'Physique' => 14, 'Chimie' => 16],
    'Bob' => ['Maths' => 12, 'Physique' => 13, 'Chimie' => 11]
];

foreach ($etudiants as $nom => $notes) {
    $moyenne = array_sum($notes) / count($notes);
    echo "Moyenne de $nom : $moyenne<br>";
}
?>
