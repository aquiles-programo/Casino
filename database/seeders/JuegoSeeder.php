<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->insert([
            'nombre' => 'BAMBOO RUSH',
            'descripcion' => 'Descripción para Bamboo rush',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es'
        ]);
        DB::table('juegos')->insert([
            'nombre' => 'REELS OF WEALTH',
            'descripcion' => 'Descripción para Reels of death',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es'
        ]);
        DB::table('juegos')->insert([
            'nombre' => 'DRAGON & PHOENIX',
            'descripcion' => 'Descripción para Dragon & Phoenix',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es'
        ]);
        DB::table('juegos')->insert([
            'nombre' => 'TAKE THE BANK',
            'descripcion' => 'Descripción para Take the Bank',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es'
        ]);
        DB::table('juegos')->insert([
            'nombre' => 'CAISHEN’S ARRIVAL',
            'descripcion' => 'Descripción para Caishen\'s Arrival',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es'
        ]);
        DB::table('juegos')->insert([
            'nombre' => 'GEMMED!',
            'descripcion' => 'Descripción para Gemmed',
            'estado' => true,
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'url_juego' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es'
        ]);
    }
}
