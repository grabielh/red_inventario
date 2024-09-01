<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laptops') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Formulario de Búsqueda -->
                    <form action="{{ route('laptops.search') }}" method="GET" class="mb-6">
                        <div class="flex items-center border-b border-gray-300 py-2">
                            <input type="text" name="query" placeholder="Buscar laptops por modelo, procesador, etc." class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600" value="{{ request('query') }}">
                            <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">Buscar</button>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a type="button" href="{{ route('laptops.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir nuevo</a>
                            </div>
                        </div>
                    </form>

                    <!-- Resultados de la Búsqueda -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($laptops as $index => $laptop)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $laptop->model }}</h3>
                            </div>
                            <!-- Contenido colapsable -->
                            <div class="mt-2 text-sm">
                                <p><strong>Name:</strong> {{ $laptop->name }}</p>
                                <p><strong>Dimensiones:</strong> {{ $laptop->dimensions }}</p>
                                <p><strong>N.Orden:</strong> {{ $laptop->id }}</p>

                                <div id="details-{{ $index }}" class="hidden">
                                    <p><strong>Fuente de Alimentación:</strong> {{ $laptop->power_supply }}</p>
                                    <p><strong>Paquete de Batería:</strong> {{ $laptop->battery_package }}</p>
                                    <p><strong>Procesador:</strong> {{ $laptop->processor }}</p>
                                    <p><strong>Memoria:</strong> {{ $laptop->memory }}</p>
                                    <p><strong>Almacenamiento:</strong> {{ $laptop->storage }}</p>
                                    <p><strong>Monitor:</strong> {{ $laptop->monitor }}</p>
                                    <p><strong>Teclado:</strong> {{ $laptop->keyboard }}</p>
                                    <p><strong>Conectores/Slots:</strong> {{ $laptop->connectors_slots }}</p>
                                    <p><strong>Características de Seguridad:</strong> {{ $laptop->security_features }}</p>
                                    <p><strong>Características Inalámbricas:</strong> {{ $laptop->wireless_features }}</p>
                                </div>
                                <!-- <button class="text-indigo-600 font-bold hover:text-indigo-900 mt-2">
                                    {{ __('Mostrar más') }}
                                </button> -->
                            </div>
                            <div class="mt-4">
                                <form action="{{ route('laptops.destroy', $laptop->id) }}" method="POST">
                                    <a href="{{ route('laptops.show', $laptop->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                    <a href="{{ route('laptops.edit', $laptop->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900 mr-2">{{ __('Editar') }}</a>
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('laptops.destroy', $laptop->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('¿Estás seguro de que quieres eliminar?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-gray-500">{{ __('No se encontraron laptops que coincidan con la búsqueda.') }}</p>
                        @endforelse
                    </div>

                    <!-- Paginación -->
                    <div class="mt-4 px-4">
                        {!! $laptops->appends(['query' => request('query')])->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@vite(['resources/js/showdate.js']),