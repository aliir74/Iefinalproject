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
use App\Relatedgame;
use App\User;
use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //user handle nemishe tooye javab
        $gameId = Game::where('title', $gameTitle)->get()[0]['id'];
        $leaderboard = Leaderboard::with(['user', 'game'])->where('game_id', $gameId)->orderBy('score', 'desc')->take(10)->get();

        if(!(Auth::guest())) {
            $userRecord = Leaderboard::with(['user', 'game'])->where('game_id', $gameId)->where('user_id', Auth::user()->id)->get();
            $tmp = false;
            for($i = 0; $i < count($leaderboard->toArray()); $i++) {
                if($leaderboard->toArray()[$i] == $userRecord->toArray()[0]) {
                    $tmp = true;
                    break;
                }
            }
            if($tmp == false) {
                $leaderboard[] = $userRecord[0];
            }
        } else {
            $leaderboard = Leaderboard::with(['user', 'game'])->where('game_id', $gameId)->orderBy('score', 'desc')->take(10)->get();
        }
        $leaderboard = ['leaderboard'=>$leaderboard];
        $response = ['ok'=>true, 'result'=>$leaderboard];
        return ['response'=>$response];
    }

    public function comments($gameTitle, Request $request) {
        if($request->has('offset')) {
            $offset = $request->get('offset');
            $gameId = Game::where('title', $gameTitle)->get()[0]['id'];
            $comments = Comment::with(['game', 'user'])->where('game_id', '=', $gameId)->orderBy('created_at', 'desc')->take(3 + $offset)->get();
            $slice = array_slice($comments->toArray(), 3);
            $slice = ['comments' => $slice];
            $response = ['ok' => true, 'result' => $slice];
            return ['response' => $response];
        } else {
            $gameId = Game::where('title', $gameTitle)->get()[0]['id'];
            $comments = Comment::with(['game', 'user'])->where('game_id', '=', $gameId)->orderBy('created_at', 'desc')->take(3)->get();
            $comments = ['comments' => $comments];
            $response = ['ok' => true, 'result' => $comments];
            return ['response' => $response];
        }
    }

    public function search(Request $request) {
        if($request->has('q'))
            $q = $request->get('q');
        $games = Game::where('title', 'LIKE', '%'.$q.'%')->get();
        $newCollection = collect($games);
        $edited = $newCollection->map(function ($item, $key) {
            $categories = $item['categories'];
            $categories = explode('،', $categories);
            $item['categories'] = $categories;
            return $item;
        });
        $games = ['game'=>$edited];
        $response = ['ok'=>true, 'result'=>$games];
        return ['response'=>$response];

    }

    public function related_games($gameTitle) {
        $gameId = Game::where('title', $gameTitle)->get()[0]['id'];
        $relateds = Relatedgame::with(['game'])->where('maingame_id', $gameId)->get();
        $games = ['game'=>$relateds];
        $response = ['ok'=>true, 'result'=>$games];
        return ['response'=>$response];
    }
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}