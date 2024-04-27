<?php

require '../function/function python script.php';

// Récupérer les données POST
$word = isset($_POST['hash']) ? $_POST['hash'] : '';
$hash_type = isset($_POST['hash_type']) ? $_POST['hash_type'] : 'sha256';

// Construire les données à passer à la fonction python_script
$data = escapeshellarg($word) . " " . escapeshellarg($hash_type);

// Appeler la fonction python_script pour générer le mot de passe
$word_hashed = python_script("hash", "hash", $data, "Erreur lors du chiffrement du mot.");


echo $word_hashed;
?>