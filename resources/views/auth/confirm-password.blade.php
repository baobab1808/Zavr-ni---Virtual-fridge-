<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <div class="mb-3 text-sm text-muted">
                {{ __('Ovo je zaštićeno područje aplikacije. Prije nastavka potvrdite lozinku.') }}
            </div>

            <x-jet-validation-errors class="mb-2" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div>
                    <x-jet-label for="password" value="{{ __('Lozinka') }}" />
                    <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" autofocus />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Potvrdi') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
