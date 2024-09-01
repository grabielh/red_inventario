<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full data-input" value="Laptop" autocomplete="name" placeholder="Name" readonly />
        <span id="name-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="model" :value="__('Model')" />
        <x-text-input id="model" name="model" type="text" class="mt-1 block w-full data-input" :value="old('model', $laptop?->model)" autocomplete="model" placeholder="Model" />
        <span id="model-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('model')" />
    </div>

    <div>
        <x-input-label for="dimensions" :value="__('Dimensions')" />
        <x-text-input id="dimensions" name="dimensions" type="text" class="mt-1 block w-full data-input" :value="old('dimensions', $laptop?->dimensions)" autocomplete="dimensions" placeholder="Dimensions" />
        <span id="dimensions-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('dimensions')" />
    </div>

    <div>
        <x-input-label for="power_supply" :value="__('Power Supply')" />
        <x-text-input id="power_supply" name="power_supply" type="text" class="mt-1 block w-full data-input" :value="old('power_supply', $laptop?->power_supply)" autocomplete="power_supply" placeholder="Power Supply" />
        <span id="power_supply-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('power_supply')" />
    </div>

    <div>
        <x-input-label for="battery_package" :value="__('Battery Package')" />
        <x-text-input id="battery_package" name="battery_package" type="text" class="mt-1 block w-full data-input" :value="old('battery_package', $laptop?->battery_package)" autocomplete="battery_package" placeholder="Battery Package" />
        <span id="battery_package-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('battery_package')" />
    </div>

    <div>
        <x-input-label for="processor" :value="__('Processor')" />
        <x-text-input id="processor" name="processor" type="text" class="mt-1 block w-full data-input" :value="old('processor', $laptop?->processor)" autocomplete="processor" placeholder="Processor" />
        <span id="processor-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('processor')" />
    </div>

    <div>
        <x-input-label for="memory" :value="__('Memory')" />
        <x-text-input id="memory" name="memory" type="text" class="mt-1 block w-full data-input" :value="old('memory', $laptop?->memory)" autocomplete="memory" placeholder="Memory" />
        <span id="memory-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('memory')" />
    </div>

    <div>
        <x-input-label for="storage" :value="__('Storage')" />
        <x-text-input id="storage" name="storage" type="text" class="mt-1 block w-full data-input" :value="old('storage', $laptop?->storage)" autocomplete="storage" placeholder="Storage" />
        <span id="storage-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('storage')" />
    </div>

    <div>
        <x-input-label for="monitor" :value="__('Monitor')" />
        <x-text-input id="monitor" name="monitor" type="text" class="mt-1 block w-full data-input" :value="old('monitor', $laptop?->monitor)" autocomplete="monitor" placeholder="Monitor" />
        <span id="monitor-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('monitor')" />
    </div>

    <div>
        <x-input-label for="keyboard" :value="__('Keyboard')" />
        <x-text-input id="keyboard" name="keyboard" type="text" class="mt-1 block w-full data-input" :value="old('keyboard', $laptop?->keyboard)" autocomplete="keyboard" placeholder="Keyboard" />
        <span id="keyboard-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('keyboard')" />
    </div>

    <div>
        <x-input-label for="connectors_slots" :value="__('Connectors Slots')" />
        <x-text-input id="connectors_slots" name="connectors_slots" type="text" class="mt-1 block w-full data-input" :value="old('connectors_slots', $laptop?->connectors_slots)" autocomplete="connectors_slots" placeholder="Connectors Slots" />
        <span id="connectors_slots-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('connectors_slots')" />
    </div>

    <div>
        <x-input-label for="security_features" :value="__('Security Features')" />
        <x-text-input id="security_features" name="security_features" type="text" class="mt-1 block w-full data-input" :value="old('security_features', $laptop?->security_features)" autocomplete="security_features" placeholder="Security Features" />
        <span id="security_features-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('security_features')" />
    </div>

    <div>
        <x-input-label for="wireless_features" :value="__('Wireless Features')" />
        <x-text-input id="wireless_features" name="wireless_features" type="text" class="mt-1 block w-full data-input" :value="old('wireless_features', $laptop?->wireless_features)" autocomplete="wireless_features" placeholder="Wireless Features" />
        <span id="wireless_features-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('wireless_features')" />
    </div>

    <div>
        <x-input-label for="img" :value="__('Img')" />
        <x-text-input id="img" name="img" type="text" class="mt-1 block w-full data-input" :value="old('img', $laptop?->img)" autocomplete="img" placeholder="Img" />
        <span id="img-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('img')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/calcular.js']),