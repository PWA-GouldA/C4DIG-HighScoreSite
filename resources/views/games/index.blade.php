@extends('layouts.layout')

@section('title','Games | HiSS')

@section('page-header', 'Games')

@section('content')
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                @foreach($games as $game)
                    <li class="row">
                        <span class="col-2">{{ $game->id }}</span>
                        <span class="col-5">{{ $game->name }}</span>
                        <span class="col-5">{{ $game->developer_id }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection