<div class="space-y-6">

    <div>
        <x-input-label for="model" :value="__('Model')" />
        <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" :value="old('model', $laptop?->model)" autocomplete="model" placeholder="Model" />
        <x-input-error class="mt-2" :messages="$errors->get('model')" />
    </div>
    <div>
        <x-input-label for="dimensions" :value="__('Dimensions')" />
        <x-text-input id="dimensions" name="dimensions" type="text" class="mt-1 block w-full" :value="old('dimensions', $laptop?->dimensions)" autocomplete="dimensions" placeholder="Dimensions" />
        <x-input-error class="mt-2" :messages="$errors->get('dimensions')" />
    </div>
    <div>
        <x-input-label for="power_supply" :value="__('Power Supply')" />
        <x-text-input id="power_supply" name="power_supply" type="text" class="mt-1 block w-full" :value="old('power_supply', $laptop?->power_supply)" autocomplete="power_supply" placeholder="Power Supply" />
        <x-input-error class="mt-2" :messages="$errors->get('power_supply')" />
    </div>
    <div>
        <x-input-label for="battery_package" :value="__('Battery Package')" />
        <x-text-input id="battery_package" name="battery_package" type="text" class="mt-1 block w-full" :value="old('battery_package', $laptop?->battery_package)" autocomplete="battery_package" placeholder="Battery Package" />
        <x-input-error class="mt-2" :messages="$errors->get('battery_package')" />
    </div>
    <div>
        <x-input-label for="processor" :value="__('Processor')" />
        <x-text-input id="processor" name="processor" type="text" class="mt-1 block w-full" :value="old('processor', $laptop?->processor)" autocomplete="processor" placeholder="Processor" />
        <x-input-error class="mt-2" :messages="$errors->get('processor')" />
    </div>
    <div>
        <x-input-label for="memory" :value="__('Memory')" />
        <x-text-input id="memory" name="memory" type="text" class="mt-1 block w-full" :value="old('memory', $laptop?->memory)" autocomplete="memory" placeholder="Memory" />
        <x-input-error class="mt-2" :messages="$errors->get('memory')" />
    </div>
    <div>
        <x-input-label for="storage" :value="__('Storage')" />
        <x-text-input id="storage" name="storage" type="text" class="mt-1 block w-full" :value="old('storage', $laptop?->storage)" autocomplete="storage" placeholder="Storage" />
        <x-input-error class="mt-2" :messages="$errors->get('storage')" />
    </div>
    <div>
        <x-input-label for="monitor" :value="__('Monitor')" />
        <x-text-input id="monitor" name="monitor" type="text" class="mt-1 block w-full" :value="old('monitor', $laptop?->monitor)" autocomplete="monitor" placeholder="Monitor" />
        <x-input-error class="mt-2" :messages="$errors->get('monitor')" />
    </div>
    <div>
        <x-input-label for="keyboard" :value="__('Keyboard')" />
        <x-text-input id="keyboard" name="keyboard" type="text" class="mt-1 block w-full" :value="old('keyboard', $laptop?->keyboard)" autocomplete="keyboard" placeholder="Keyboard" />
        <x-input-error class="mt-2" :messages="$errors->get('keyboard')" />
    </div>
    <div>
        <x-input-label for="connectors_slots" :value="__('Connectors Slots')" />
        <x-text-input id="connectors_slots" name="connectors_slots" type="text" class="mt-1 block w-full" :value="old('connectors_slots', $laptop?->connectors_slots)" autocomplete="connectors_slots" placeholder="Connectors Slots" />
        <x-input-error class="mt-2" :messages="$errors->get('connectors_slots')" />
    </div>
    <div>
        <x-input-label for="security_features" :value="__('Security Features')" />
        <x-text-input id="security_features" name="security_features" type="text" class="mt-1 block w-full" :value="old('security_features', $laptop?->security_features)" autocomplete="security_features" placeholder="Security Features" />
        <x-input-error class="mt-2" :messages="$errors->get('security_features')" />
    </div>
    <div>
        <x-input-label for="wireless_features" :value="__('Wireless Features')" />
        <x-text-input id="wireless_features" name="wireless_features" type="text" class="mt-1 block w-full" :value="old('wireless_features', $laptop?->wireless_features)" autocomplete="wireless_features" placeholder="Wireless Features" />
        <x-input-error class="mt-2" :messages="$errors->get('wireless_features')" />
    </div>
    <div>
        <x-input-label for="img" :value="__('Img')" />
        <x-text-input id="img" name="img" type="text" class="mt-1 block w-full" :value="old('img', $laptop?->img)" autocomplete="img" placeholder="Img" />
        <x-input-error class="mt-2" :messages="$errors->get('img')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
