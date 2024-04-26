<body>

    <?php 
    $style = "style.css";
    $title = "Page d'accueil";
    require 'header.php'
    ?>
    <section>
        <h2>Présentation</h2>
        <p>
            Bienvenue sur ma page d'accueil. </br>
            Le site Web aura pour but de vous présenter les différents outils que j'ai pu créer au cours de mon auto formation dans le domaine de la cybersécurité.
        </p>
    </section>
    <section>
        <h2>Les différents Outils Cyber</h2>
        <div>
            <a href="./password_page/password_page.php">Création de mot de passe</a>
            <a href="./hash.php">Cryptage</a>
        </div>
    </section>

    <section>
        <h2 class="playground">Bac à sable</h2>
        <p>Un endroit qui recueillera différentes techniques d'attaque contre mon site web</p>
        <a href="./playground.php">Bac à sable</a>
    </section>
    <?php
    require 'footer.php'
    ?>

</body>
