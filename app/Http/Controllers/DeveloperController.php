<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $developers = Developer::all();
        return view('developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('developers.create');
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
        $developer = new Developer();
        $developer->name = $request->name;
        $developer->save();

        return redirect('/developers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Developer $developer
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        $diffCreate = Carbon::parse($developer->created_at)->diffForHumans(['parts' => 3,]);
        $diffUpdate = Carbon::parse($developer->updated_at)->diffForHumans(['parts' => 3,]);
        return view('developers.show', compact(['developer', 'diffCreate', 'diffUpdate',]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Developer $developer
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        return view('developers.edit', compact(['developer',]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Developer           $developer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {
        $developer->name = $request->name;
        $developer->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $developer->update();

        return redirect('/developers/' . $developer->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Developer $developer
     * @return \Illuminate\Http\Response
     */
    public function delete(Developer $developer)
    {
        //
        return view('developers.delete', compact('developer'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Developer $developer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();
        return redirect('/developers');
    }
}
