<?php 
$style = "../style.css";
require '../header.php';
?>

<body>
    <section class="form_section">
        <h2>Hash</h2>
        <form  class="hash-form" id="hash-form" action="hash_page.php" method="POST">
            <label for="hash">Veuillez entrer le mot à chiffrer</label>
            <input type="text" name="hash" id="hash" required>
            <label for="hash_type">Veuillez choisir le type de chiffrement</label>
            <select name="hash_type" id="hash_type">
                <option value="sha256">SHA256</option>
                <option value="sha512">SHA512</option>
                <option value="md5">MD5</option>
            </select>
            <button type="submit">Chiffrer</button>
        </form>
        <div class='display_hash'>
        </div>
    </section>
    <?php require '../footer.php' ?>
</body>

<script>
    document.getElementById('hash-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        fetch('generate_hash.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.querySelector('.display_hash').innerHTML = `<p id="hash_result">${data}</p>`;
        })
        .catch(error => {
            console.error(error);
        });
    });
</script>