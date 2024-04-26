document.addEventListener('DOMContentLoaded', function() {
    const fill = document.querySelector('.fill');
    const slider = document.querySelector('.slider');

    // Fonction pour mettre à jour la largeur de la barre de remplissage en fonction du total des cases cochées
    function updateFillWidth() {
        let total = 0;

        console.log(slider.value)
        if (slider.value <= 0) {
            total += 0;
        } 
        
        else if (slider.value <= 8) {
            total += 25;
        }
        else if (slider.value <= 12) {
            total += 50;
        }
        else if (slider.value <= 16) {
            total += 75;
        }
        else if (slider.value >= 16) {
            total += 100;
        }

        // Mettre à jour la largeur de la barre de remplissage
        
        fill.style.width = total + '%';

        if(total <= 25) {
            fill.classList.add('red')
            fill.classList.remove('yellow')
            fill.classList.remove('green')
            fill.classList.remove('blue')
        } else if (total <= 50) {
            fill.classList.add('yellow')
            fill.classList.remove('red')
            fill.classList.remove('green')
            fill.classList.remove('blue')
        } else if (total <= 75) {
            fill.classList.add('green')
            fill.classList.remove('red')
            fill.classList.remove('yellow')
            fill.classList.remove('blue')
        } else if (total <= 100) {
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

    slider.addEventListener('input', updateFillWidth);
});
