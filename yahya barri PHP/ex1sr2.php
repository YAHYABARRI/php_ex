<?php
$employes = [
    ['nom' => 'Alice', 'poste' => 'Développeur', 'salaire' => 4000],
    ['nom' => 'Bob', 'poste' => 'Designer', 'salaire' => 3500],
    ['nom' => 'Charlie', 'poste' => 'Manager', 'salaire' => 5000],
    ['nom' => 'Diana', 'poste' => 'Analyste', 'salaire' => 3000],
    ['nom' => 'Eve', 'poste' => 'Consultant', 'salaire' => 4500]
];

function salaireMoyen($employes) {
    $total = array_sum(array_column($employes, 'salaire'));
    $moyenne = $total / count($employes);
    echo "Salaire moyen : $moyenne €<br>";
}

salaireMoyen($employes);
?>
