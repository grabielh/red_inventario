// Selecciona todos los botones y menús
const buttons = document.querySelectorAll('.menu-button');
const menus = document.querySelectorAll('.menu-items');

buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        // Oculta todos los menús excepto el que corresponde al botón clicado
        menus.forEach((menu, menuIndex) => {
            if (index === menuIndex) {
                menu.classList.toggle('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    });
});

// Opcional: Cerrar el menú al hacer clic fuera de él
document.addEventListener('click', (e) => {
    if (!e.target.closest('.menu-button') && !e.target.closest('.menu-items')) {
        menus.forEach(menu => menu.classList.add('hidden'));
    }
});