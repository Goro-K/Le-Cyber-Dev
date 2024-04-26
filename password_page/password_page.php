<?php 
$style = "../style.css"; 
require '../header.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<section class="form_section">
    <h2>Veuillez choisir la taille de votre mot de passe.</h2>
        <div>
            <form class="password_form" action="password_page.php" method="POST" autocomplete="off">
                <label for="password_length">Longueur du mot de passe</label>
                <div class="slider-container">
                    <input type="range" min="0" max="49" class="slider" id="password_length" name="password_length" value="0">
                    <div class="password-length"></div>
                </div>
                <div class="checkbox-div">
                    <input class="checkbox" type="checkbox" name="lowercase" id="lowercase" autocomplete="off">
                    <label class="lowercase" for="lowercase">Minuscules ?</label>
                </div>
                <div class="checkbox-div">
                    <input class="checkbox" type="checkbox" name="uppercase" id="uppercase" autocomplete="off">
                    <label class="uppercase" for="uppercase">Majuscules ?</label>
                </div>
                <div class="checkbox-div">
                    <input class="checkbox" type="checkbox" name="numbers" id="numbers" autocomplete="off">
                    <label for="numbers">Numéros ?</label>
                </div>
                <div class="checkbox-div">
                    <input class="checkbox" type="checkbox" name="special_characters" id="special_characters" autocomplete="off">
                    <label for="special_characters">Caractères spéciaux ?</label>
                </div>
                <div class="line">
                    <div class="fill"></div>
                </div>
            </form>
            <div id="generatedPassword"></div>
            <?php require 'todo.php' ?>
        </div>
</section>

<?php require '../footer.php' ?>

<script src="line.js"></script>
<script src="bar.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Fonction pour mettre à jour les données avant l'envoi
    function updateFormData() {
        const passwordLength = $('#password_length').val();
        const lowercase = $('#lowercase').is(':checked') ? 'on' : 'off';
        const uppercase = $('#uppercase').is(':checked') ? 'on' : 'off';
        const numbers = $('#numbers').is(':checked') ? 'on' : 'off';
        const specialCharacters = $('#special_characters').is(':checked') ? 'on' : 'off';
        return {
            password_length: passwordLength,
            lowercase: lowercase,
            uppercase: uppercase,
            numbers: numbers,
            special_characters: specialCharacters
        };
    }

    // Envoyer la requête AJAX lors des changements
    $('#password_length, .checkbox').on('change', function() {
        const formData = updateFormData();

        // Envoyer une requête AJAX
        $.ajax({
            type: 'POST',
            url: './generate_password.php', // URL de votre script PHP pour générer le mot de passe
            data: formData,
            success: function(response) {
                $('#generatedPassword').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});


</script>