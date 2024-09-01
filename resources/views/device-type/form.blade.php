<div class="space-y-6">

    <div>
        <x-input-label for="device_selector" :value="__('Select Device Type')" />
        <select id="device_selector" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona un dispositivo...</option>
            @foreach ($combined as $device)
            <option value="{{ $device->model }}">{{ $device->model}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <!-- <x-input-label for="device_type" :value="__('Device Type')" /> -->
        <x-text-input id="device_type" name="device_type" type="text" class="mt-1 block w-full data-input" :value="old(('device_type') ?? ($deviceType?->device_type ?? ''))" autocomplete="device_type" placeholder="Device Type" readonly />
        <span id="device_type-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('device_type')" />
    </div>

    <div>
        <x-input-label for="use_selector" :value="__('Select Use')" />
        <select id="use_selector" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona un uso...</option>
            <option value="estandar">Estandar</option>
            <option value="rotativo">Rotativo</option>
        </select>
    </div>

    <div>
        <!-- <x-input-label for="use" :value="__('Use')" /> -->
        <x-text-input id="use" name="use" type="text" class="mt-1 block w-full data-input" :value="old('use', $deviceType?->use)" autocomplete="use" placeholder="Use" readonly />
        <span id="use-text-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('use')" />
    </div>

    <div>
        <x-input-label for="user_name" :value="__('User Name')" />
        <x-text-input id="user_name" name="user_name" type="text" class="mt-1 block w-full data-input" :value="old('user_name', $deviceType?->user_name)" placeholder="User Name" />
        <span id="user_name-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('user_name')" />
    </div>

    <div>
        <x-input-label for="device_name" :value="__('Device Name')" />
        <x-text-input id="device_name" name="device_name" type="text" class="mt-1 block w-full data-input" :value="old('device_name', $deviceType?->device_name)" placeholder="Device Name" />
        <span id="device_name-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('device_name')" />
    </div>

    <div>
        <x-input-label for="monitor_selector" :value="__('Monitor')" />
        <select id="monitor_selector" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona una opción...</option>
            <option value="1">1</option>
            <option value="0">0</option>
        </select>
    </div>

    <div>
        <x-input-label for="monitor" :value="__('Monitor')" />
        <x-text-input id="monitor" name="monitor" type="text" class="mt-1 block w-full data-input" :value="old('monitor', $deviceType?->monitor)" autocomplete="monitor" placeholder="Monitor" />
        <span id="monitor-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('monitor')" />
    </div>

    <!-- Contenedor para el campo 'monitor_model' -->
    <div id="monitor_model_container" style="display: none;">
        <x-input-label for="monitor_model" :value="__('Monitor Model')" />
        <x-text-input id="monitor_model" name="monitor_model" type="text" class="mt-1 block w-full data-input" :value="old('monitor_model', $deviceType?->monitor_model)" autocomplete="monitor_model" placeholder="Monitor Model" />
        <span id="monitor_model-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('monitor_model')" />
    </div>

    <!-- Selector para Idconnection -->
    <div>
        <x-input-label for="idconnection_selector" :value="__('Select Idconnection')" />
        <select id="idconnection_selector" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona un dispositivo...</option>
            @foreach ($connection as $connection)
            <option value="{{ $connection->id }}">{{ $connection->id}}</option>
            @endforeach
        </select>
    </div>

    <!-- Campo de entrada para Idconnection -->
    <div>
        <x-input-label for="idconnection" :value="__('Idconnection')" />
        <x-text-input id="idconnection" name="idconnection" type="text" class="mt-1 block w-full data-input" :value="old(('idconnection') ?? ($deviceType?->idconnection ?? ''))" autocomplete="idconnection" placeholder="Idconnection" readonly />
        <span id="idconnection-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('idconnection')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/selector_divice_type.js','resources/js/calcular.js'])