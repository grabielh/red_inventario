<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Desktop PCs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow-lg sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center mb-4">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Desktop PCs') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">Lista de todos los {{ __('Desktop PCs') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('desktop-pcs.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir nuevo</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($desktopPcs as $index => $desktopPc)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $desktopPc->motherboard_model }}</h3>
                            </div>
                            <div id="details-{{ $index }}" class="hidden mt-2 text-sm">
                                <p><strong>Modelo de Placa Base:</strong> {{ $desktopPc->motherboard_model }}</p>
                                <p><strong>RAM:</strong> {{ $desktopPc->ram }}</p>
                                <p><strong>Almacenamiento:</strong> {{ $desktopPc->storage }}</p>
                                <p><strong>Procesador:</strong> {{ $desktopPc->processor }}</p>
                                <p><strong>Imagen:</strong> <img src="{{ asset('storage/' . $desktopPc->img) }}" alt="Imagen de {{ $desktopPc->motherboard_model }}" class="w-32 h-32 object-cover rounded-lg"></p>
                            </div>
                            <div class="mt-4">
                                <form action="{{ route('desktop-pcs.destroy', $desktopPc->id) }}" method="POST">
                                    <a href="{{ route('desktop-pcs.show', $desktopPc->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Mostrar') }}</a>
                                    <a href="{{ route('desktop-pcs.edit', $desktopPc->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900 mr-2">{{ __('Editar') }}</a>
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('desktop-pcs.destroy', $desktopPc->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('¿Estás seguro de que quieres eliminar?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-4 px-4">
                        {!! $desktopPcs->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
