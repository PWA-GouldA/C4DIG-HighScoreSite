<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

use App\Developer;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $developers = Developer::all();
        return view('games.create', compact('developers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $game = new Game();
        $game->name = $request->name;
        $game->developer_id = $request->developer;
        $game->save();

        return redirect('/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
        $developers = Developer::all();
        return view('games.edit', compact(['game', 'developers']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
        $game->name = $request->name;
        $game->developer_id = $request->developer;
        $game->update();

        return redirect('/games');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function delete(Game $game)
    {
        //
        return view('games.delete', compact('game'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Game $game)
    {
        //
        $game->delete();
        return redirect('/games');
    }
}
