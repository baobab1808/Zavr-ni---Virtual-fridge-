<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">
            <div x-data="{ recovery: false }">
                <div class="mb-3" x-show="! recovery">
                    {{ __('Potvrdite pristup svom računu unosom koda za provjeru autentičnosti koji ste dobili od aplikacije za autentifikaciju.') }}
                </div>

                <div class="mb-3" x-show="recovery">
                    {{ __('Potvrdite pristup svom računu unosom jednog od kodova za oporavak u hitnim slučajevima.') }}
                </div>

                <x-jet-validation-errors class="mb-3" />

                <form method="POST" action="{{ route('two-factor.login') }}">
                    @csrf

                    <div class="form-group" x-show="! recovery">
                        <x-jet-label value="{{ __('Kod') }}" />
                        <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text"
                                     inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                        <x-jet-input-error for="code"></x-jet-input-error>
                    </div>

                    <div class="form-group" x-show="recovery">
                        <x-jet-label value="{{ __('Kod za oporavak') }}" />
                        <x-jet-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}" type="text"
                                     name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                        <x-jet-input-error for="recovery_code"></x-jet-input-error>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-outline-secondary"
                                x-show="! recovery"
                                x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                            {{ __('Upotrijebite kod za oporavak') }}
                        </button>

                        <button type="button" class="btn btn-outline-secondary"
                                x-show="recovery"
                                x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                            {{ __('Upotrijebite kod za provjeru autentičnosti') }}
                        </button>

                        <x-jet-button>
                            {{ __('Prijava') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>