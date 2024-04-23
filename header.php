<?php
function nav_item($link, $title){
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === '/Le Cyber Dev/'. $link) {
        $classe .= ' active';
    }
    return '<li><a class="' . $classe . '" href="' . $link . '">' . $title . '</a></li>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        <?php 
        echo isset($title) ? $title : 'Page d\'accueil';
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <h1>Bienvenue sur Ma Page</h1>
    <nav>
        <ul>
            <?= nav_item('index.php', 'Accueil') ?>
            <?= nav_item('password_page.php', 'Générateur de mot de passe') ?>
            <?= nav_item('playground.php', 'Bac à sable') ?>
            <?= nav_item('contact.php', 'Contact') ?>
        </ul>
    </nav>
</header>