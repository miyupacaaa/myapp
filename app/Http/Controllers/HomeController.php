<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::getWithContoryAndPaginate(10);
        return view('welcome')->with('players', $players);
    }
}
