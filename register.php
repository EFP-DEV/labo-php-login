<?php

// If form submitted → process registration
if (!empty($_POST)) {

    include 'database.php'; // DB connection ($pdo)

    // Prepare insert (secure: prepared statement)
    $sql = 'INSERT INTO `operator` (`username`, `password`) VALUES (?, ?)';
    $statement = $pdo->prepare($sql);

    // Hash password before storing
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Execute query with user input
    $statement->execute([
        $_POST['username'],
        $password
    ]);

} else {
    // Page accessed without form submission
    echo 'Vous avez pas soumis';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="register.php">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" name="username" value="" required>

        <label for="password">Mot de passe</label>
        <input id="password" name="password" value="" type="password" required>

        <button type="submit">Creer</button>
    </form>
</body>
</html>