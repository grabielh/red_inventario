<x-app-layout>


    <div class="py-12">
        <div class="w-[100%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Flex container for horizontal layout -->
                <div class="flex space-x-6 p-6 text-gray-900">
                    <!-- Existing Section -->
                    <div class="w-[30%]">
                        <h3 class="text-lg font-semibold text-gray-900">Dispositivos registrados</h3>
                        <!-- Formulario de Búsqueda -->
                        <form action="{{ route('dashboard.search') }}" method="GET" class="mb-6">
                            <div class="flex items-center border-b border-gray-300 py-2">
                                <input type="text" name="query" placeholder="Buscar dispositivos por modelo, procesador, etc." class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600" value="{{ request('query') }}">
                                <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">Buscar</button>
                            </div>
                        </form>

                        <!-- Resultados -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                            @forelse ($combined as $index => $device)
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        @if(isset($device->model))
                                        {{ $device->name }}
                                        {{ $device->model }}
                                        @elseif(isset($device->motherboard_model) && $device instanceof \App\Models\DesktopPc)
                                        {{ $device->name }}
                                        {{ $device->motherboard_model }}
                                        @else
                                        {{ __('Dispositivo Desconocido') }}
                                        @endif
                                    </h3>
                                </div>
                                <!-- Contenido colapsable -->
                                <div class="mt-2 text-sm">
                                    @if(isset($device->dimensions))
                                    <p><strong>Dimensiones:</strong> {{ $device->dimensions }}</p>
                                    @endif
                                    <div id="details-{{ $index }}" class="hidden">
                                        @if(isset($device->power_supply))
                                        <p><strong>Fuente de Alimentación:</strong> {{ $device->power_supply }}</p>
                                        @endif
                                        @if(isset($device->processor))
                                        <p><strong>Procesador:</strong> {{ $device->processor }}</p>
                                        @endif
                                        @if(isset($device->memory))
                                        <p><strong>Memoria:</strong> {{ $device->memory }}</p>
                                        @endif
                                        <!-- Añade más detalles según los campos comunes -->
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <form action="{{ route('laptops.destroy', $device->id ?? '') }}" method="POST">
                                        <a href="{{ route('laptops.show', $device->id ?? '') }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                        <a href="{{ route('laptops.edit', $device->id ?? '') }}" class="text-indigo-600 font-bold hover:text-indigo-900 mr-2">{{ __('Editar') }}</a>
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('laptops.destroy', $device->id ?? '') }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('¿Estás seguro de que quieres eliminar?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                    </form>
                                </div>
                            </div>
                            @empty
                            <p class="text-center text-gray-500">{{ __('No se encontraron dispositivos.') }}</p>
                            @endforelse
                        </div>

                    </div>

                    <!-- New Section -->
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Áreas Registradas</h3>
                        <!-- Formulario o lista de dispositivos -->
                        <div class="w-full">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Device Types') }}</h1>
                                    <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Device Types') }}.</p>
                                </div>
                            </div>

                            <div class="flow-root">
                                <div class="mt-8 overflow-x-auto">
                                    <div class="inline-block min-w-full py-2 align-middle">
                                        <table class="w-full divide-y divide-gray-300">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Device Type</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Use</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">User Name</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Device Name</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Monitor</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Monitor Model</th>
                                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Idconnection</th>
                                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                @foreach ($deviceTypes as $deviceType)
                                                <tr class="even:bg-gray-50">
                                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ $deviceType->id }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->device_type }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->use }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->user_name }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->device_name }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->monitor }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->monitor_model }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $deviceType->idconnection }}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="mt-4 px-4">
                                            {!! $deviceTypes->withQueryString()->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>