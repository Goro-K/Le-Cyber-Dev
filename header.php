<?php
function nav_item($link, $title){
    $classe = 'nav-item';
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
    if ($currentPage === $link) {
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
    <?php
        echo '<link rel="stylesheet" type="text/css" href=' . $style . '>';
    ?>
</head>
<header>
    <h1>Bienvenue sur Ma Page</h1>
    <nav>
        <ul>
            <?= nav_item('/Le Cyber Dev/index.php', 'Accueil') ?>
            <?= nav_item('/Le Cyber Dev/password_page/password_page.php', 'Générateur de mot de passe') ?>
            <?= nav_item('/Le Cyber Dev/playground.php', 'Bac à sable') ?>
            <?= nav_item('/Le Cyber Dev/contact.php', 'Contact') ?>
        </ul>
    </nav>
</header>