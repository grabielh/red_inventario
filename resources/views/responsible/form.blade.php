<div class="space-y-6">
    
    <div>
        <x-input-label for="first_name" :value="__('First Name')"/>
        <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $responsible?->first_name)" autocomplete="first_name" placeholder="First Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('first_name')"/>
    </div>
    <div>
        <x-input-label for="last_name" :value="__('Last Name')"/>
        <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $responsible?->last_name)" autocomplete="last_name" placeholder="Last Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
    </div>
    <div>
        <x-input-label for="position" :value="__('Position')"/>
        <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $responsible?->position)" autocomplete="position" placeholder="Position"/>
        <x-input-error class="mt-2" :messages="$errors->get('position')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>