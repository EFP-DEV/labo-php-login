<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php
    // Display error message if login failed
    if(isset($_GET['error'])){
        echo '<p>ahahaha you didnt say the magic word</p>';
    }
    ?>
    
    
    <form method="POST" action="checkin_unsafe.php">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" name="username" value="admin" required>

        <label for="password">Mot de passe</label>
        <input id="password" name="password" value="admin" type="password" required>

        <button type="submit">Se connecter</button>
    </form>

    <a href="register.php">Pas de compte ?</a>
</body>
</html>