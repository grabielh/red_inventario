<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dispositivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[100%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Flex container for horizontal layout -->
                <div class="flex space-x-6 p-6 text-gray-900">
                    <!-- Existing Section -->
                    <div class="w-[30%]">
                        <h3 class="text-lg font-semibold text-gray-900">abrir Terminal</h3>
                        <!-- Formulario de Búsqueda -->
                        <a href="javascript:void(0);" data-action="abrir-terminal">Terminal</a>
                        </div>

                    <!-- New Section -->
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Areas Registradas</h3>
                        <!-- Puedes agregar el contenido de la nueva sección aquí -->
                        <!-- Por ejemplo, otro formulario o lista de dispositivos -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@vite(['resources/js/terminal.js'])
