document.addEventListener('DOMContentLoaded', function () {
    // Función para actualizar el valor del campo de texto basado en la selección del selector
    function updateInputFromSelector(selectorId, inputId, countSpanId) {
        const selector = document.getElementById(selectorId);
        const inputField = document.getElementById(inputId);
        const countSpan = document.getElementById(countSpanId);

        if (selector && inputField) {
            selector.addEventListener('change', function () {
                inputField.value = selector.options[selector.selectedIndex].text;
                countSpan.textContent = `${inputField.value.length} caracteres`;
            });

            // Inicializa el conteo de caracteres del campo de texto
            countSpan.textContent = `${inputField.value.length} caracteres`;
        }
    }

    // Actualiza el campo de texto 'device_type' basado en la selección del 'device_selector'
    updateInputFromSelector('device_selector', 'device_type', 'device_type-count');

    // Actualiza el campo de texto 'use' basado en la selección del 'use_selector'
    updateInputFromSelector('use_selector', 'use', 'use-text-count');

    // Actualiza el campo de texto 'monitor' basado en la selección del 'monitor_selector'
    updateInputFromSelector('monitor_selector', 'monitor', 'monitor-count');

    // Actualiza el campo de texto 'monitor_model' basado en la selección del 'monitor_model_selector'
    updateInputFromSelector('monitor_model_selector', 'monitor_model', 'monitor_model-count');

    // Actualiza el campo de texto 'idconnection' basado en la selección del 'idconnection_selector'
    updateInputFromSelector('idconnection_selector', 'idconnection', 'idconnection-count');
});

document.addEventListener('DOMContentLoaded', function () {
    // Función para actualizar el valor del campo de texto basado en la selección del selector
    function updateInputFromSelector(selectorId, inputId, countSpanId) {
        const selector = document.getElementById(selectorId);
        const inputField = document.getElementById(inputId);
        const countSpan = document.getElementById(countSpanId);

        if (selector && inputField && countSpan) {
            selector.addEventListener('change', function () {
                // Actualiza el campo de texto con el valor seleccionado
                inputField.value = selector.value;
                // Actualiza el conteo de caracteres
                countSpan.textContent = `${inputField.value.length} caracteres`;

                // Muestra u oculta el campo 'monitor_model' basado en la selección
                const monitorModelContainer = document.getElementById('monitor_model_container');
                if (selector.value === '1') {
                    monitorModelContainer.style.display = 'block';
                } else {
                    monitorModelContainer.style.display = 'none';
                }
            });

            // Inicializa el conteo de caracteres del campo de texto
            countSpan.textContent = `${inputField.value.length} caracteres`;

            // Inicializa la visibilidad del campo 'monitor_model'
            const monitorModelContainer = document.getElementById('monitor_model_container');
            if (selector.value === '1') {
                monitorModelContainer.style.display = 'block';
            } else {
                monitorModelContainer.style.display = 'none';
            }
        }
    }

    // Actualiza el campo de texto 'monitor' basado en la selección del 'monitor_selector'
    updateInputFromSelector('monitor_selector', 'monitor', 'monitor-count');
});
