<div class="space-y-6">
    
    <div>
        <x-input-label for="connection_type" :value="__('Connection Type')"/>
        <x-text-input id="connection_type" name="connection_type" type="text" class="mt-1 block w-full" :value="old('connection_type', $connection?->connection_type)" autocomplete="connection_type" placeholder="Connection Type"/>
        <x-input-error class="mt-2" :messages="$errors->get('connection_type')"/>
    </div>
    <div>
        <x-input-label for="mac_address" :value="__('Mac Address')"/>
        <x-text-input id="mac_address" name="mac_address" type="text" class="mt-1 block w-full" :value="old('mac_address', $connection?->mac_address)" autocomplete="mac_address" placeholder="Mac Address"/>
        <x-input-error class="mt-2" :messages="$errors->get('mac_address')"/>
    </div>
    <div>
        <x-input-label for="d_h_c_p" :value="__('Dhcp')"/>
        <x-text-input id="d_h_c_p" name="DHCP" type="text" class="mt-1 block w-full" :value="old('DHCP', $connection?->DHCP)" autocomplete="DHCP" placeholder="Dhcp"/>
        <x-input-error class="mt-2" :messages="$errors->get('DHCP')"/>
    </div>
    <div>
        <x-input-label for="ip_connection" :value="__('Ip Connection')"/>
        <x-text-input id="ip_connection" name="ip_connection" type="text" class="mt-1 block w-full" :value="old('ip_connection', $connection?->ip_connection)" autocomplete="ip_connection" placeholder="Ip Connection"/>
        <x-input-error class="mt-2" :messages="$errors->get('ip_connection')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>