// terminal.js

function abrirTerminal() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/abrir-terminal', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Content-Type': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            console.log('Terminal abierta.');
        } else {
            console.error('Error al abrir la terminal.');
        }
    }).catch(error => {
        console.error('Error de conexión:', error);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('click', function (event) {
        if (event.target.matches('[data-action="abrir-terminal"]')) {
            abrirTerminal();
        }
    });
});
