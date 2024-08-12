// Ejecutar automáticamente al cargar la página
document.addEventListener("DOMContentLoaded", function () {
    toggleDetails(0); // Cambia '0' al índice que deseas mostrar automáticamente
});

function toggleDetails(index) {
    const details = document.getElementById(`details-${index}`);
    if (details.classList.contains('hidden')) {
        details.classList.remove('hidden');
    } else {
        details.classList.add('hidden');
    }
}