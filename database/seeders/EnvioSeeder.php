<?php

namespace Database\Seeders;

use App\Models\envio;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{

    private $envios = array(
        array(
            'nombreCompania' => 'Correos',
            'telefono' => '900 400 004',
            'email' => 'informacion@correos.com',
                    ),
        array(
            'nombreCompania' => 'Seur',
            'telefono' => '902 101 010',
            'email' => 'web@seur.net',
                    ),
        array(
            'nombreCompania' => 'MRW',
            'telefono' => '942 897 416',
            'email' => 'web@mrw.net',
                    ),
        array(
            'nombreCompania' => 'UPS',
            'telefono' => '900 102 410',
            'email' => 'web@ups.com',
                    ),
        array(
            'nombreCompania' => 'DHL',
            'telefono' => '902 127 070',
            'email' => 'web@dhl.com',
                    ),
        array(
            'nombreCompania' => 'Fedex',
            'telefono' => '902 10 08 71',
            'email' => 'web@fedex.com',
                    ),

    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //
              foreach ($this->envios as $envio) {
                $a = new envio();
                $a->nombrecompania = $envio['nombreCompania'];
                $a->telefono = $envio['telefono'];
                $a->email = $envio['email'];
                $a->save();
            }
            $this->command->info('Tabla envios inicializada con datos');
    }
}

