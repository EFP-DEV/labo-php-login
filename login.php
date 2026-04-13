<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php
    var_dump($_POST);
    var_dump($_SESSION);

    if(isset($_GET['error'])){
        echo '<p>ahahaha you didnt say the magic word</p>';
    }
    ?>
    
    
    <form method="POST" action="checkin.php">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" name="username" value="admin" required>

        <label for="password">Mot de passe</label>
        <input id="password" name="password" value="admin" type="password" required>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>