<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="dni" value="{{ __('DNI') }}" />
                <x-jet-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="apellidos" value="{{ __('Apellidos') }}" />
                <x-jet-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="localidad" value="{{ __('Localidad') }}" />
                <x-jet-input id="localidad" class="block mt-1 w-full" type="text" name="localidad" :value="old('localidad')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="provincia" value="{{ __('Provincia') }}" />
                <x-jet-input id="provincia" class="block mt-1 w-full" type="text" name="provincia" :value="old('provincia')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="fechaNac" value="{{ __('Fecha Nacimiento') }}" />
                <x-jet-input id="fechaNac" class="block mt-1 w-full" type="date" name="fechaNac" :value="old('fechaNac')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="genero" value="{{ __('Sexo') }}" />
                <select id="genero"  class="block mt-1 w-full" name="genero" required>
                    <option value="0">Masculino</option>
                    <option value="1">Femenino</option>
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="escomprador" value="{{ __('Tipo de usuario') }}"  />
                <select id="escomprador"  class="block mt-1 w-full" name="escomprador" required>
                    <option value="0">Comprador</option>
                    <option value="1">Vendedor</option>
                </select>
            </div>
            <div class="mt-4">
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
