document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const output = document.querySelector('.password-length');

    output.textContent = slider.value;
    slider.addEventListener('input', function() {
        output.textContent = this.value;
    });
});