@extends('layouts.layout')

@section('title','Games | HiSS')

@section('page-header', 'Games')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="/games/create" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
            <a href="/games/{{ $game->id }}/edit" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="/games/{{ $game->id }}/delete" class="btn btn-outline-danger">
                <i class="fas fa-times"></i> Delete
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">ID</span>
                    <span class="col bg-dark text-light">{{ $game->id }}</span>
                </li>

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">Name</span>
                    <span class="col bg-dark text-light">{{ $game->name }}</span>
                </li>

                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Developer</span>
                    <span class="col bg-dark text-light">{{ $game->developer->name }}</span>
                </li>

                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Created</span>
                    <span class="col bg-dark text-light">
                        {{ $diffCreate  }}
                    </span>
                </li>

                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Updated</span>
                    <span class="col bg-dark text-light">
                        {{ $diffUpdate }}
                    </span>
                </li>

            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Played by {{$game->users->count()}} Players</h3>
            <ul class="list-unstyled">

                <li class="row">
                    <span class="col-sm-1 col-md-1 col-lg-2 bg-dark text-light">ID</span>
                    <span class="col-sm-11 col-md-11 col-lg-10 bg-dark text-light">Name</span>
                </li>
                @foreach($players as $player)
                    <li class="row">
                        <span class="col-sm-1 col-md-1 col-lg-2">{{ $player->id }}</span>
                        <span class="col-sm-11 col-md-11 col-lg-10 ">{{ $player->name }}</span>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection