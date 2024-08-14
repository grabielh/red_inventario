<div class="space-y-6">

    <!-- Motherboard Model -->
    <div>
        <x-input-label for="motherboard_model" :value="__('Motherboard Model')"/>
        <x-text-input id="motherboard_model" name="motherboard_model" type="text" class="mt-1 block w-full data-input" :value="old('motherboard_model', $desktopPc?->motherboard_model)" autocomplete="motherboard_model" placeholder="Motherboard Model"/>
        <span id="motherboard_model-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('motherboard_model')"/>
    </div>

    <!-- RAM -->
    <div>
        <x-input-label for="ram" :value="__('Ram')"/>
        <x-text-input id="ram" name="ram" type="text" class="mt-1 block w-full data-input" :value="old('ram', $desktopPc?->ram)" autocomplete="ram" placeholder="Ram"/>
        <span id="ram-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('ram')"/>
    </div>

    <!-- Storage -->
    <div>
        <x-input-label for="storage" :value="__('Storage')"/>
        <x-text-input id="storage" name="storage" type="text" class="mt-1 block w-full data-input" :value="old('storage', $desktopPc?->storage)" autocomplete="storage" placeholder="Storage"/>
        <span id="storage-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('storage')"/>
    </div>

    <!-- Processor -->
    <div>
        <x-input-label for="processor" :value="__('Processor')"/>
        <x-text-input id="processor" name="processor" type="text" class="mt-1 block w-full data-input" :value="old('processor', $desktopPc?->processor)" autocomplete="processor" placeholder="Processor"/>
        <span id="processor-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('processor')"/>
    </div>

    <!-- Img -->
    <div>
        <x-input-label for="img" :value="__('Img')"/>
        <x-text-input id="img" name="img" type="text" class="mt-1 block w-full data-input" :value="old('img', $desktopPc?->img)" autocomplete="img" placeholder="Img"/>
        <span id="img-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('img')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/calcular.js']),

