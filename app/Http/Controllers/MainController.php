<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MainController extends Controller
{
    public $last_key = '7965261399874be28581dfafb7761b2a';

    
    public function index()
    {
        $last_key = '7965261399874be28581dfafb7761b2a';
        $competitons = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Competitions')->json();

        $today = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/GamesByDate/'. date('Y-m-d'))->json();



        // $comp = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])
        // ->get('https://fly.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/1')->json();

        // $round = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])
        // ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Schedule/73')->json();

        dump($today);

        return view('welcome', [
            'competitions'=> $competitons,
            'today' => $today,
        ]);
    }

      /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    public function paginate($items, $perPage = 20, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $competitons = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Competitions')->json();

        $comp_detail = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/'.$id)->json();

        dump($comp_detail['Games'][0]);

        $comp_seasons = $comp_detail['Seasons'];

        $comp_games = $this->paginate($comp_detail['Games']);
        $comp_games->setPath('/competition/'.$id); 

        return view('comp_detail', [
            'comp_detail'=> $comp_detail,
            'comp_games' => $comp_games,
            'competitions'=> $competitons,
            'comp_seasons' => $comp_seasons
        ]);
    }

    public function rounds(Request $request, $roundid)
    {
        $rounds = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Schedule/'.$roundid)->json();

        $competitons = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Competitions')->json();

        // $comp_detail = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        // ->get('https://fly.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/'.$id)->json();

        dump($rounds[0]);

        $season = $request->get('season');

        return view('rounds', [
            'rounds'=> $rounds,
            'season'=> $season,
            'competitions'=> $competitons,
            // 'comp_detail'=> $comp_detail,
            
            
        ]);
    }

    public function show_game(Request $request, $gameid)
    {
        $game = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/stats/json/BoxScore/'. $gameid)->json();

        dump($game[0]);

        return view('game', [
            'game'=> $game[0],
        ]);
    }

    public function teams()
    {
        $teams = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Teams')->json();

        dump($teams[0]);

        return view('teams', [
            'teams'=> $teams,
        ]); 
    }

   
    public function show_team($teamid, $roundid)
    {
        $team = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/PlayersByTeam/' .$teamid)->json();

        $round = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/TeamSeasonStats/' .$roundid)->json();

        $stand = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Standings/' .$roundid)->json();

        dump($team);
        dump($round);
        dump($stand);


        return view('team', [
            'team'=> $team,
        ]); 
    }

    public function player($playerid)
    {
        $player = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$this->last_key])
        ->get('https://fly.sportsdata.io/v3/soccer/scores/json/Player/' .$playerid)->json();

        dump($player);

        return view('player', [
            'player'=> $player,
        ]); 
    }

}
