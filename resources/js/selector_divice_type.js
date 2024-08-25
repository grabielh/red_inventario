document.addEventListener('DOMContentLoaded', function () {
    const deviceSelector = document.getElementById('device_selector');
    const deviceTypeInput = document.getElementById('device_type');

    deviceSelector.addEventListener('change', function () {
        const selectedDevice = deviceSelector.options[deviceSelector.selectedIndex].text;
        deviceTypeInput.value = selectedDevice;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Función para actualizar el valor del input de texto 'use-text' según el valor seleccionado del selector 'use-select'
    function setUseValue() {
        const useSelect = document.getElementById('use-select'); // Selector
        const useInput = document.getElementById('use-text'); // Input de texto

        // Copia el valor seleccionado del selector al input de texto
        useInput.value = useSelect.value;
    }

    // Añade un listener para detectar cambios en el selector
    const useSelectElement = document.getElementById('use-select');
    if (useSelectElement) {
        useSelectElement.addEventListener('change', setUseValue);
    }
});
