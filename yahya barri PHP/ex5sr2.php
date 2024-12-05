<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Commentaire : <input type="text" name="commentaire"><br>
    <button type="submit">Soumettre</button>
</form>
<?php
$commentaires = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $horodatage = date('Y-m-d H:i:s');
    $commentaires[] = ['texte' => $commentaire, 'date' => $horodatage];
}

foreach ($commentaires as $commentaire) {
    echo $commentaire['texte'] . " (" . $commentaire['date'] . ")<br>";
}
?>

</body>
</html>