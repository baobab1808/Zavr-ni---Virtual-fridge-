<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <h1 style="font-weight:bold; font-size:30px; font-family:'Open Sans'">{{ __('Ažuriraj lozinku') }}</h1>
    </x-slot>

    <x-slot name="description">
       <h3> {{ __('Osigurajte da vaš račun koristi dugu, nasumičnu lozinku kako biste ostali sigurni.') }}</h3>
    </x-slot>

    <x-slot name="form">
        <div class="w-md-75">
            <div class="form-group">
                <x-jet-label for="current_password" value="{{ __('Trenutna lozinka') }}" />
                <x-jet-input id="current_password" type="password" class="{{ $errors->has('current_password') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.current_password" autocomplete="current-password" />
                <x-jet-input-error for="current_password" />
            </div>

            <div class="form-group">
                <x-jet-label for="password" value="{{ __('Nova lozinka') }}" />
                <x-jet-input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.password" autocomplete="new-password" />
                <x-jet-input-error for="password" />
            </div>

            <div class="form-group">
                <x-jet-label for="password_confirmation" value="{{ __('Potvrdi lozinku') }}" />
                <x-jet-input id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Spremi') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
