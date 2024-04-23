<?php require 'header.php' ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['password_length'])) {
    $password_length = $_POST['password_length'];
    $command = "python3 ./password_generator.py ";
    $command .= escapeshellarg($password_length) . " ";
    $command .= isset($_POST['letters']) ? 'on ' : 'off ';
    $command .= isset($_POST['numbers']) ? 'on ' : 'off ';
    $command .= isset($_POST['special_characters']) ? 'on ' : 'off ';
    $output = [];
    $return_var = 0;
    exec($command, $output, $return_var);

    if($return_var === 0) {
        $password = htmlspecialchars($output[0]);
    } else {
        $password = "Veuillez ajouter une taille de mot de passe valide et cocher au moins une option.";
    }
}
?>

<section>
    <h2>Veuillez choisir la taille de votre mot de passe.
        <form action="password_page.php" method="POST">
            <label for="password_length">Longueur du mot de passe</label>
            <input type="number" name="password_length" id="password_length" min="8" max="64" required>
            <label for="letters">Inclure des lettres ?</label>
            <input type="checkbox" name="letters" id="letters"> 
            <label for="numbers">Inclure des Numéros ?</label>
            <input type="checkbox" name="numbers" id="numbers">
            <label for="special_characters">Inclure des caractères spéciaux ?</label>
            <input type="checkbox" name="special_characters" id="special_characters">
            <button type="submit">Générer</button>
        </form>
        <?php
            if (isset($password)) {
                echo "<p>Le mot de passe est : $password</p>";
            }
        ?>
</section>
</h2>
<?php require 'footer.php' ?>