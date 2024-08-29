<div class="space-y-6">

    <div>
        <x-input-label for="device_selector" :value="__('Select Device')" />
        <select id="device_selector" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona un dispositivo...</option>
            @foreach ($combined as $device)
            <option value="{{ $device->model_name ?? $device->name }}">{{ $device->model_name ?? $device->model }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <!-- <x-input-label for="device_type" :value="__('Device Type')" /> -->
        <x-text-input id="device_type" name="device_type" type="text" class="mt-1 block w-full data-input" :value="old('device_type', $deviceType?->device_type)" autocomplete="device_type" placeholder="Device Type" readonly />
        <span id="device_type-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('device_type')" />
    </div>

    <div>
        <x-input-label for="use-select" :value="__('Use Selector')" />
        <select id="use-select" name="use-select" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona el uso...</option>
            <option value="estandar">estandar</option>
            <option value="rotativo">rotativo</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('use-select')" />
    </div>

    <div>
        <!-- <x-input-label for="use-text" :value="__('Use Name')" /> -->
        <x-text-input id="use-text" name="use" type="text" class="mt-1 block w-full data-input" :value="old('use', $deviceType?->use)" autocomplete="use" placeholder="Use" readonly />
        <span id="use-text-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('use')" />
    </div>


    <div>
        <x-input-label for="device_name" :value="__('Device Name')" />
        <x-text-input id="device_name" name="device_name" type="text" class="mt-1 block w-full data-input" :value="old('device_name', $deviceType?->device_name)" placeholder="Device Name" />
        <span id="device_name-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('device_name')" />
    </div>

    <div>
        <x-input-label for="use-monitor" :value="__('Use Monitor')" />
        <select id="use-monitor" name="use-monitor" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona el uso...</option>
            <option value="1">sí</option>
            <option value="0">no</option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('use-monitor')" />
    </div>

    <div id="monitor-model-container" style="display:none;">
        <x-input-label for="monitor_model" :value="__('Monitor Model')" />
        <x-text-input id="monitor_model" name="monitor_model" type="text" class="mt-1 block w-full data-input" :value="old('monitor_model', $deviceType?->monitor_model)" autocomplete="monitor_model" placeholder="Monitor Model" />
        <span id="monitor_model-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('monitor_model')" />
    </div>

    <div>
        <x-input-label for="select_idconnection" :value="__('Select Idconnection')" />
        <select id="select_idconnection" name="select_idconnection" class="mt-1 block w-full rounded-lg border-gray-300">
            <option value="">Selecciona una conexión...</option>
            @foreach ($connection as $conn)
            <option value="{{ $conn->id }}">{{ $conn->connection_type }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('select_idconnection')" />
    </div>

    <div>
        <x-input-label for="idconnection" :value="__('Idconnection')" />
        <x-text-input id="idconnection" name="idconnection" type="text" class="mt-1 block w-full data-input" :value="old('idconnection', $deviceType?->idconnection)" autocomplete="idconnection" placeholder="Idconnection" />
        <span id="idconnection-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('idconnection')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/selector_divice_type.js','resources/js/calcular.js']),