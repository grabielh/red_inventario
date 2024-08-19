function toggleDetails(index) {
    var details = document.getElementById('details-' + index);
    var button = details.nextElementSibling;

    if (details.classList.contains('hidden')) {
        details.classList.remove('hidden');
        button.textContent = "Mostrar menos";
    } else {
        details.classList.add('hidden');
        button.textContent = "Mostrar más";
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.toggle-details-btn');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var index = this.getAttribute('data-index');
            toggleDetails(index);
        });
    });
});
