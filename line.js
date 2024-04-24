document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.checkbox');
    const fill = document.querySelector('.fill');

    // Fonction pour mettre à jour la largeur de la barre de remplissage en fonction du total des cases cochées
    function updateFillWidth() {
        let total = 0;
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                total += parseFloat(checkbox.value);
            }
        });
        
        fill.style.width = total + '%';

        if(total == 25) {
            fill.classList.add('red')
            fill.classList.remove('yellow')
            fill.classList.remove('green')
            fill.classList.remove('blue')
        } else if (total == 50) {
            fill.classList.add('yellow')
            fill.classList.remove('red')
            fill.classList.remove('green')
            fill.classList.remove('blue')
        } else if (total == 75) {
            fill.classList.add('green')
            fill.classList.remove('red')
            fill.classList.remove('yellow')
            fill.classList.remove('blue')
        } else if (total == 100) {
            fill.classList.add('blue')
            fill.classList.remove('red')
            fill.classList.remove('yellow')
            fill.classList.remove('green')
        } else {
            fill.classList.remove('red')
            fill.classList.remove('yellow')
            fill.classList.remove('green')
            fill.classList.remove('blue')
        }
    }

    // Appeler la fonction pour mettre à jour la largeur de la barre de remplissage au chargement de la page
    updateFillWidth();

    // Ajouter des écouteurs d'événements aux cases cochées pour mettre à jour la barre de remplissage lorsqu'elles sont cochées ou décochées
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', updateFillWidth);
    });
});
