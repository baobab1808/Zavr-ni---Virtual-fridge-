<x-jet-action-section>
    <x-slot name="title">
        <h1 style="font-weight:bold; font-size:30px; font-family:'Open Sans'">{{ __('Autentifikacija u dva koraka') }}</h1>
    </x-slot>

    <x-slot name="description">
        <h3>{{ __('Dodajte dodatnu sigurnost svom računu koristeći autentifikaciju u dva koraka.') }}</h3>
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold" style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">
            @if ($this->enabled)
                {{ __('Omogućili ste autentifikaciju u dva koraka.') }}
            @else
                {{ __('Niste omogućili autentifikaciju u dva koraka.') }}
            @endif
        </h3>

        <p class="mt-3">
            {{ __('Kada je omogućena autentifikacija u dva koraka, od vas će se zatražiti siguran, nasumičan token tijekom provjere autentičnosti. Ovaj token možete preuzeti iz aplikacije Google Authenticator na svom telefonu.') }}
        </p>

        @if ($this->enabled)
            @if ($showingQrCode)
                <p class="mt-3">
                    {{ __('Sada je omogućena autentifikacija u dva koraka. Skenirajte sljedeći QR kôd koristeći aplikaciju za provjeru autentičnosti telefona.') }}
                </p>

                <div class="mt-3">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <p class="mt-3">
                    {{ __('Pohranite ove kodove za oporavak u sigurnom upravitelju lozinki. Mogu se koristiti za oporavak pristupa vašem računu ako izgubite uređaj za provjeru autentičnosti s dva koraka.') }}
                </p>

                <div class="bg-light rounded p-3">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-3">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Omogući') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Regenerirajte kodove za oporavak') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Prikaži kodove za oporavak') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Onemogući') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>