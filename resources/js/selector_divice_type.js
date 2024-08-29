document.addEventListener('DOMContentLoaded', function () {
    // Actualiza el valor del input de texto 'device_type' según el valor seleccionado del selector 'device_selector'
    const deviceSelector = document.getElementById('device_selector');
    const deviceTypeInput = document.getElementById('device_type');

    if (deviceSelector && deviceTypeInput) {
        deviceSelector.addEventListener('change', function () {
            const selectedDevice = deviceSelector.options[deviceSelector.selectedIndex].text;
            deviceTypeInput.value = selectedDevice;
        });
    }

    // Actualiza el valor del input de texto 'use-text' según el valor seleccionado del selector 'use-select'
    function setUseValue() {
        const useSelect = document.getElementById('use-select'); // Selector
        const useInput = document.getElementById('use-text'); // Input de texto

        if (useSelect && useInput) {
            useInput.value = useSelect.value;
        }
    }

    // Añade un listener para detectar cambios en el selector 'use-select'
    const useSelectElement = document.getElementById('use-select');
    if (useSelectElement) {
        useSelectElement.addEventListener('change', setUseValue);
    }

    
    // Actualiza el valor del input 'idconnection' según la selección en el selector 'select_idconnection'
    function updateIdConnection() {
        const selectIdConnection = document.getElementById('select_idconnection');
        const idConnectionInput = document.getElementById('idconnection');

        if (selectIdConnection && idConnectionInput) {
            idConnectionInput.value = selectIdConnection.value;
        }
    }

    // Añade un listener para detectar cambios en el selector 'select_idconnection'
    const selectIdConnectionElement = document.getElementById('select_idconnection');
    if (selectIdConnectionElement) {
        selectIdConnectionElement.addEventListener('change', updateIdConnection);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Función para mostrar u ocultar el campo del modelo del monitor
    function toggleMonitorVisibility() {
        const useMonitorSelect = document.getElementById('use-monitor'); // Selector de monitor
        const monitorContainer = document.getElementById('monitor-model-container'); // Contenedor del modelo de monitor

        if (useMonitorSelect && monitorContainer) {
            // Verifica si el valor del selector es '1' (Sí)
            if (useMonitorSelect.value === '1') {
                monitorContainer.style.display = 'block';
            } else {
                monitorContainer.style.display = 'none';
            }
        }
    }

    // Añade un listener para detectar cambios en el selector 'use-monitor'
    const useMonitorElement = document.getElementById('use-monitor');
    if (useMonitorElement) {
        // Inicializa la visibilidad del campo monitor al cargar la página
        toggleMonitorVisibility();
        
        // Añade el evento de cambio para actualizar la visibilidad dinámicamente
        useMonitorElement.addEventListener('change', toggleMonitorVisibility);
    }
});
