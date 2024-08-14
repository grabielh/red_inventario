<div class="space-y-6">
    
    <div>
        <x-input-label for="model" :value="__('Model')"/>
        <x-text-input id="model" name="model" type="text" class="mt-1 block w-full data-input" :value="old('model', $allInOne?->model)" autocomplete="model" placeholder="Model" oninput="updateCounter('model')"/>
        <span id="model-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('model')"/>
    </div>

    <div>
        <x-input-label for="ram" :value="__('Ram')"/>
        <x-text-input id="ram" name="ram" type="text" class="mt-1 block w-full data-input" :value="old('ram', $allInOne?->ram)" autocomplete="ram" placeholder="Ram" oninput="updateCounter('ram')"/>
        <span id="ram-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('ram')"/>
    </div>

    <div>
        <x-input-label for="storage" :value="__('Storage')"/>
        <x-text-input id="storage" name="storage" type="text" class="mt-1 block w-full data-input" :value="old('storage', $allInOne?->storage)" autocomplete="storage" placeholder="Storage" oninput="updateCounter('storage')"/>
        <span id="storage-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('storage')"/>
    </div>

    <div>
        <x-input-label for="processor" :value="__('Processor')"/>
        <x-text-input id="processor" name="processor" type="text" class="mt-1 block w-full data-input" :value="old('processor', $allInOne?->processor)" autocomplete="processor" placeholder="Processor" oninput="updateCounter('processor')"/>
        <span id="processor-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('processor')"/>
    </div>

    <div>
        <x-input-label for="img" :value="__('Img')"/>
        <x-text-input id="img" name="img" type="text" class="mt-1 block w-full data-input" :value="old('img', $allInOne?->img)" autocomplete="img" placeholder="Img" oninput="updateCounter('img')"/>
        <span id="img-count" class="text-sm text-gray-500">0 caracteres</span>
        <x-input-error class="mt-2" :messages="$errors->get('img')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
@vite(['resources/js/calcular.js']),

