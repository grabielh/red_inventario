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
    <!-- Campo de texto que se actualizará según el dispositivo seleccionado -->
    <div>
        <x-input-label for="device_type" :value="__('Device Type')" />
        <x-text-input id="device_type" name="device_type" type="text" class="mt-1 block w-full" :value="old('device_type', $deviceType?->device_type)" autocomplete="device_type" placeholder="Device Type" readonly />
        <x-input-error class="mt-2" :messages="$errors->get('device_type')" />
    </div>

    <div>
        <x-input-label for="use" :value="__('Use Selector')" />

        <!-- Selector para el campo Use -->
        <select id="use-select" name="use-select" class="mt-1 block w-full rounded-lg border-gray-300" onchange="setUseValue()">
            <option value="">Selecciona el uso...</option>
            <option value="">estandar</option>
            <option value="">rotativo</option>
        </select>

        <x-input-error class="mt-2" :messages="$errors->get('use-select')" />
    </div>

    <div>
        <x-input-label for="use-text" :value="__('Use Name')" />
        <x-text-input id="use-text" name="use" type="text" class="mt-1 block w-full" :value="old('use', $deviceType?->use)" autocomplete="use" placeholder="Use" />
        <x-input-error class="mt-2" :messages="$errors->get('use')" />
    </div>

    <div>
        <x-input-label for="device_name" :value="__('Device Name')" />
        <x-text-input id="device_name" name="device_name" type="text" class="mt-1 block w-full" :value="old('device_name', $deviceType?->device_name)" autocomplete="device_name" placeholder="Device Name" />
        <x-input-error class="mt-2" :messages="$errors->get('device_name')" />
    </div>
    <div>
        <x-input-label for="monitor" :value="__('Monitor')" />
        <x-text-input id="monitor" name="monitor" type="text" class="mt-1 block w-full" :value="old('monitor', $deviceType?->monitor)" autocomplete="monitor" placeholder="Monitor" />
        <x-input-error class="mt-2" :messages="$errors->get('monitor')" />
    </div>
    <div>
        <x-input-label for="monitor_model" :value="__('Monitor Model')" />
        <x-text-input id="monitor_model" name="monitor_model" type="text" class="mt-1 block w-full" :value="old('monitor_model', $deviceType?->monitor_model)" autocomplete="monitor_model" placeholder="Monitor Model" />
        <x-input-error class="mt-2" :messages="$errors->get('monitor_model')" />
    </div>
    <div>
        <x-input-label for="idconnection" :value="__('Idconnection')" />
        <x-text-input id="idconnection" name="idconnection" type="text" class="mt-1 block w-full" :value="old('idconnection', $deviceType?->idconnection)" autocomplete="idconnection" placeholder="Idconnection" />
        <x-input-error class="mt-2" :messages="$errors->get('idconnection')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/selector_divice_type.js']),