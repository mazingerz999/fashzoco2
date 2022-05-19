<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'dni' => $input['dni'],
            'apellidos' => $input['apellidos'],
            'localidad' => $input['localidad'],
            'provincia' => $input['provincia'],
            'telefono' => $input['telefono'],
            'genero' => $input['genero'],
            'escomprador' => $input['escomprador'],
            'fechaNac' => $input['fechaNac'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

