<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class WelcomeController extends Controller
{
    //
    public const PAGINATE_LIMIT = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::getWithContoryByPaginate(self::PAGINATE_LIMIT);
        return view('welcome')->with('players', $players);
    }
}
