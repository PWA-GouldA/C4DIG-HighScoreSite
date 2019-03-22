@extends('layouts.layout')

@section('title','Games | HiSS')

@section('page-header', 'Games')

@section('content')
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                <li class="row bg-dark text-light">
                    <span class="col-1">ID</span>
                    <span class="col">Name</span>
                    <span class="col">Developer</span>
                </li>
                @foreach($games as $game)
                    <li class="row">
                        <span class="col-1">{{ $game->id }}</span>
                        <span class="col">{{ $game->name }}</span>
                        <span class="col">{{ $game->developer->name }}
                            <i class="small">({{ $game->developer_id }})</i>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection