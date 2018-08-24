<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="http://exephpp8">Acceuile</a>
            <h1>Exercice 1</h1>
        </nav>
        <!-- récupe de l'user agent depuis le server -->
        <p>Votre User Agent: <?= $_SERVER['HTTP_USER_AGENT']; ?></p>
        <!-- récupe di l'ip depuis le server -->
        <p>Votre addresse IP: <?= $_SERVER['REMOTE_ADDR']; ?></p>
        <!-- récupe du nom du server -->
        <p>Le nom du serveur: <?= $_SERVER['SERVER_NAME']; ?></p>
    </body>
</html>
