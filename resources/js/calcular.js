document.addEventListener('DOMContentLoaded', function () {
    // Lista de todos los inputs
    const inputs = document.querySelectorAll('.data-input');

    inputs.forEach(input => {
        // Obtén el span de conteo de caracteres correspondiente
        const countSpan = document.getElementById(`${input.id}-count`);

        // Actualiza el conteo cuando cambia el valor del input
        input.addEventListener('input', function () {
            countSpan.textContent = `${this.value.length} caracteres`;
        });

        // Inicializa el conteo al cargar la página
        countSpan.textContent = `${input.value.length} caracteres`;
    });
});