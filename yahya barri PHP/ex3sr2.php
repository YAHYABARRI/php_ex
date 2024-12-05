<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Email : <input type="email" name="email"><br>
    Mot de passe : <input type="password" name="password"><br>
    <button type="submit">Se connecter</button>
</form>
<?php
$utilisateurs = [
    'user1@example.com' => 'password1',
    'user2@example.com' => 'password2'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
        echo "Connexion réussie !<br>";
    } else {
        echo "Email ou mot de passe incorrect.<br>";
    }
}
?>

</body>
</html>