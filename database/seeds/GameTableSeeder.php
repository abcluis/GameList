<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = new \App\Game();
        $game->name = 'Super Metroid';
        $game->year = '1994';
        $game->description = 'Super Metroid es un videojuego concebido en 1994, el tercero en la serie de Metroid. 
        Fue desarrollado por el equipo R&D1 de Nintendo para la consola Super Nes. Con un cartucho de 24 megabits, 
        fue en su tiempo el juego más grande disponible para esta consola.';
        $game->image = 'http://res.cloudinary.com/gleish95/image/upload/c_thumb,h_300,w_400/v1500606461/syoq6riywvbm9g6lwsqw_ctlvtq.jpg';
        $game->user_id = 1;
        $game->visit= 3;
        $game->save();

        $game = new \App\Game();
        $game->name = 'Super Mario World';
        $game->year = '1992';
        $game->description = 'Es un videojuego de plataformas desarrollado y publicado por Nintendo para un paquete 
        en el cual se incluían este juego y la consola Super Nintendo Entertainment System, ya que se vendían en conjunto 
        durante el lanzamiento de ésta en Japón, Norteamérica en 1990 y Europa en 1991; además fue la séptima entrega 
        dentro de la serie de Super Mario.';
        $game->image = 'http://res.cloudinary.com/gleish95/image/upload/c_thumb,h_300,w_400/v1500606594/Super_20Mario_20World_20_U_ryazky.png';
        $game->user_id = 1;
        $game->visit= 2;
        $game->save();

        $game = new \App\Game();
        $game->name = 'Super Mario RPG';
        $game->year = '1996';
        $game->description = 'Es un videojuego desarrollado en conjunto entre Nintendo y Square Enix en 1996 para la 
        videoconsola Super Nintendo Entertainment System. Este juego es la primera incursión del personaje más 
        famoso de Nintendo, Mario, en el mundo de los RPG';
        $game->image = 'http://res.cloudinary.com/gleish95/image/upload/c_thumb,h_300,w_400/v1500606652/latest_yazgpr.jpg';
        $game->user_id = 1;
        $game->visit= 5;
        $game->save();


    }
}
