<?php require 'header.php' ?>

<?php require 'function python script.php';

$password_length = $_POST['password_length'];
$letters = isset($_POST['letters']) ? 'on' : 'off';
$numbers = isset($_POST['numbers']) ? 'on' : 'off';
$special_characters = isset($_POST['special_characters']) ? 'on' : 'off';
$error = "Veuillez ajouter une taille de mot de passe valide et cocher au moins une option.";

$data = escapeshellarg($password_length) . " " . escapeshellarg($letters) . " " . escapeshellarg($numbers) . " " . escapeshellarg($special_characters);

// Appel de la fonction python_script
$password = python_script("password_length", "password_generator", $data, $error);
?>

<section class="form_section">
    <h2>Veuillez choisir la taille de votre mot de passe.</h2>
        <div>
            <form class="password_form" action="password_page.php" method="POST" autocomplete="off">
                <label for="password_length">Longueur du mot de passe</label>
                <input type="number" name="password_length" id="password_length" min="8" max="64" required autocomplete="off">
                <label class="letters" for="letters">Inclure des lettres ?</label>
                <input class="checkbox" type="checkbox" name="letters" id="letters" autocomplete="off" value="25"> 
                <label for="numbers">Inclure des Numéros ?</label>
                <input class="checkbox" type="checkbox" name="numbers" id="numbers" autocomplete="off" value="25">
                <label for="special_characters">Inclure des caractères spéciaux ?</label>
                <input class="checkbox" type="checkbox" name="special_characters" id="special_characters" autocomplete="off" value="25">
                <span class="front" type="submit">Générer ?</button>
                <span class="back">Done</span>
                <div class="line">
                    <div class="fill"></div>
                </div>
            </form>
            <?php
                if (isset($password) && !empty($password)) {
                    echo "<p>Le mot de passe est : $password</p>";
                }
            ?>
            <?php require 'todo.php' ?>
        </div>
</section>

<?php require 'footer.php' ?>

<script src="line.js"></script>