<?php

namespace App\Http\Controllers;

use App\GameUser;
use Illuminate\Http\Request;
use App\User;
use App\Game;

class GameUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $scores = GameUser::All();
        return view('scores.index', compact(['scores']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function show(GameUser $gameUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function edit(GameUser $gameUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameUser $gameUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameUser  $gameUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameUser $gameUser)
    {
        //
    }
}
