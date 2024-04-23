<?php require 'header.php' ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['hash'])) {
    $data = escapeshellarg($_POST['hash']); // Sécurise l'entrée
    $command = "python3 ./hash.py $data";
    $output = [];  // Initialisation du tableau qui contiendra la sortie du script
    $return_var = 0; 
    exec($command, $output, $return_var);
    
    if ($return_var === 0) { // Si le script s'est exécuté correctement
        $word_hashed = htmlspecialchars($output[0]);
    } else {
        $word_hashed = "Une erreur est survenue lors du cryptage du mot.";
    }
}
?>


<section>
    <h2>Hash</h2>
    <form action="hash.php" method="POST">
        <label for="hash">Veuillez entrer le mot à crypter</label>
        <input type="text" name="hash" id="hash" required>
        <button type="submit">Crypter</button>
    </form>
    <?php
        if (isset($word_hashed)) {
            echo "<p>Le mot crypté est : $word_hashed</p>";
        }
    ?>
</section>

<?php require 'footer.php' ?>