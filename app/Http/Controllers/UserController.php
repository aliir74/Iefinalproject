<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 1/19/17
 * Time: 6:01 PM
 */

namespace App\Http\Controllers;

use App\Comment;
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

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}