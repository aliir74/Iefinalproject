<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 1/19/17
 * Time: 6:01 PM
 */

namespace App\Http\Controllers;

use App\Comment;
use App\Leaderboard;
use App\User;
use App\Game;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function test() {
        return 100;
    }

    public function home() {

        $slider = Game::orderBy('rate', 'desc')->take(5)->get();
        $new_games = Game::orderBy('created_at', 'desc')->take(4)->get();
        $comments = Comment::with(['user','game'])->orderBy('created_at', 'desc')->take(5)->get();
        $tutorials = [];
        $homepage = ['homepage'=>['slider'=>$slider, 'new_games'=>$new_games, 'comments'=>$comments, 'tutorials'=>$tutorials]];
        $result = ['ok'=>true, 'result'=>$homepage];
        $response = ['response'=>$result];


        return $response;
    }

    public function header($gameTitle) {
        $game = (Game::where('title', $gameTitle)->get())[0];
        $categories = $game['categories'];
        $categories = explode('،', $categories);
        $game['categories'] = $categories;
        $game = ['game'=>$game];
        $response = ['ok'=>true, 'result'=>$game];
        return ['response'=>$response];
    }

    public function info($gameTitle) {
        $game = (Game::where('title', $gameTitle)->get())[0];
        $categories = $game['categories'];
        $categories = explode('،', $categories);
        $game['categories'] = $categories;
        $game = ['game'=>$game];
        $response = ['ok'=>true, 'result'=>$game];
        return ['response'=>$response];
    }

    public function leaderboard($gameTitle) {
        $leaderboard = Leaderboard::with(['user'])->orderBy('score', 'desc')->take(10)->get();
        $leaderboard = ['leaderboard'=>$leaderboard];
        $response = ['ok'=>true, 'result'=>$leaderboard];
        return ['response'=>$response];
    }

    public function comments($gameTitle) {
        $gameId = Game::where('title', $gameTitle)->get()[0]['id'];
        $comments = Comment::with(['game', 'user'])->where('game_id', '=', $gameId)->orderBy('created_at', 'desc')->take(5)->get();
        $comments = ['comments'=>$comments];
        $response = ['ok'=>true, 'result'=>$comments];
        return ['response'=>$response];
    }

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}