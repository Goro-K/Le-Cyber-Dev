<?php
require '../function/function python script.php';

// Récupérer les données POST
$passwordLength = isset($_POST['password_length']) ? $_POST['password_length'] : 0;
$lowercase = isset($_POST['lowercase']) ? $_POST['lowercase'] : 'off';
$uppercase = isset($_POST['uppercase']) ? $_POST['uppercase'] : 'off';
$numbers = isset($_POST['numbers']) ? $_POST['numbers'] : 'off';
$specialCharacters = isset($_POST['special_characters']) ? $_POST['special_characters'] : 'off';
$error = "Veuillez ajouter une taille de mot de passe valide et cocher au moins une option.";

// Construire les données à passer à la fonction python_script
$data = escapeshellarg($passwordLength) . " " . escapeshellarg($lowercase) . " " . escapeshellarg($uppercase) . " " . escapeshellarg($numbers) . " " . escapeshellarg($specialCharacters);
// Appeler la fonction python_script pour générer le mot de passe
$password = python_script("password_length", "../python_script/password_generator", $data, $error);

// Renvoyer le mot de passe généré ou une erreur si la génération a échoué
echo $password;
?>
