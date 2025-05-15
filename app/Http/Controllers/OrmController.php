<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Goal;
use App\Models\Player;
use App\Models\President;
use App\Models\Team;
use App\Models\TeamGame;


use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas()
    {
        //print'hola';

        /*$player=Player::find(1);
        return $player->Goals;

        $$player=Player::find(2);
        return $player->Goals;

        $player=Player::with([
            'goals',
            'team.president'
        ])->get();
        return $player;*/

        /*$player=Player::find(1);
        return $player->Team;*/

        //$Team=Team::find(2);
        //return $Team->Players;

        //$gol=Goal::find(2);
        //return $gol->Player;

        //$partido=Game::find(2);
        //return $partido->Goals;

        //$partido=Game::find(1);
        //return $partido->Goals;

        //$partidos=Game::all();
        //return $partidos;

        //$gol=Goal::all();
        //return $gol;

        //$jugadores=Player::all();
        //return $jugadores;

        //$president=President::find(1);
        //return $president->team;

        //$president=President::find(2);
        //return $president->team;

        $Gol=Goal::with([
            'player.team',
            'game'
        ])->get();
        return $Gol;

        /*$president=President::all();
        $team=Team::all();

        return[
            'president'=>president,
            'team'=>team
        ];*/
    }
}
