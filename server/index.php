<?php
$main_url = "#";
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
    header('Status: 401	Unauthorized', false, 401);
    header('Location: login/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques Serveur | Vakardia</title>
    <link rel="stylesheet" href="https://unpkg.com/bulmaswatch/darkly/bulmaswatch.min.css">
    <link rel="stylesheet" href="../global.css">
    link:
    
</head>
<body class="has-navbar-fixed-top">
<nav class="navbar is-success is-fixed-top has-shadow" role="navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo $main_url ?>">
            <img src="resources/logo.webp">
        </a>
        <a role="button" class="navbar-burger" data-target="navbarMain">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarMain" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">Accueil</a>
            <a class="navbar-item" href="/console/index.php">Console</a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" onclick="toggleDropdown();">Statistiques</a>
                <div class="navbar-dropdown is-hidden-mobile">
                    <a class="navbar-item" href="/stats/server.php">Serveur</a>
                    <a class="navbar-item" href="/stats/players.php">Joueurs</a>
                    <a class="navbar-item" href="/stats/site.php">Site web</a>
                    <a class="navbar-item" href="/stats/index.php">Résumé</a>
                </div>
            </div>
            <a class="navbar-item" href="/players/staff.php">Staff</a>
            <a class="navbar-item" href="/players/index.php">Joueurs</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-danger is-outlined">Se déconnecter</a>
                </div>
            </div>
        </div>
    </div>
</nav>