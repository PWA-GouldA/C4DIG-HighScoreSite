@extends('layouts.layout')
@section('title','Users | HiSS')
<!-- The page-header is the text for the main page heading -->
@section('page-header', 'Users')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="/users/create" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
        </div>
    </div>
    <div class="row">
        <ul class="col list-unstyled">
            <li class="row bg-dark text-light">
                <span class="col-1">ID</span>
                <span class="col">Game</span>
                <span class="col">Player</span>
                <span class="col">User</span>
                <span class="col-2">Actions</span>
            </li>
            @foreach($users as $user)
                <li class="row mt-1 pb-1 border-bottom">
                    <span class="col-1">{{ $user->id }}</span>
                    <span class="col">
                        <a href="/games/{{$user->game_id}}">
                            {{ $user->game['name'] }}
                        </a>
                    </span>
                    <span class="col">
                        <a href="/games/{{$user->user_id}}">
                            {{ $user->user['name'] }}
                        </a>
                    </span>
                    <span class="col text-dark">{{ $user->user }}</span>
                    <span class="col-2">
                            <form class="form-inline" action="/users/{{ $user->id }}">
                                <div class="btn-group" role="group" aria-label="Editing actions">
                                <button type="submit" class="btn btn-info btn-sm"
                                        aria-label="information">
                                    <i class="fas fa-info-circle"></i>&nbsp;
                                </button>

                                <button type="submit" class="btn btn-warning btn-sm"
                                        formaction="/users/{{$user->id}}/edit"
                                        aria-label="edit">
                                    <i class="fas fa-edit"></i>&nbsp;
                                </button>
                                <button type="submit" class="btn btn-danger btn-sm"
                                        formaction="/users/{{$user->id}}/delete"
                                        aria-label="delete">
                                    <i class="fas fa-times">  </i>
                                </button>
                                    </div>
                            </form>
                        </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('footer-extras')

@endsection