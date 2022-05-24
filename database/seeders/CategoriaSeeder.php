<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{

    private $categorias = array('Camisetas y Polos', 'Camisas', 'Vaqueros', 'Sudaderas', 'Pantalones', 'Pantalones Cortos', 'Ropa Interior', 'Abrigos',
     'Trajes', 'Zapatillas', 'Zapatos Bajos', 'Zapatos Abiertos', 'Mocasines', 'Zapatos sin cordones', 'Sandalias', 'Zapatillas Deportivas', 'Zapatos de traje',
     'Botas', 'Zapatillas de casa', 'Gafas de sol', 'Bolsos y Maletas', 'Gorros y sombreros', 'Cinturones', 'Relojes', 'Gafas filtro luz azul', 'Accesorios Tecnologicos', 'Bisuteria',
     'Carteras', 'Corbatas',  'Bufandas', 'Guantes', 'Mascarillas', 'Paraguas', 'Chandal', 'Running', 'Padel y Tenis', 'Futbol', 'Baloncesto', 'Ciclismo', 'Entrenamiento', 'Golf', 'Bolsas deporte',
     'Running', 'Padel y Tenis', 'Futbol', 'Baloncesto', 'Ciclismo', 'Entrenamiento', 'Golf' );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach ($this->categorias as $categoria) {
            $a = new Categoria();
            $a->nombrecategoria = $categoria;
            $a->save();
        }
        $this->command->info('Tabla categorias inicializada con datos');

    }
}
