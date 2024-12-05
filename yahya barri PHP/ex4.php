<?php
$scores = [
    'Alice' => 14,
    'Bob' => 16,
    'Charlie' => 12,
    'Diana' => 18,
    'Eve' => 15
];
$moyenne = array_sum($scores) / count($scores);
echo "Moyenne des scores : $moyenne<br>";
?>
