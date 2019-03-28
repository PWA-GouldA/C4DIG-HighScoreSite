@extends('layouts.layout')

@section('title','Edit | Games | HiSS')

@section('page-header', 'Edit Game')

@section('content')
    <div class="row">
        <div class="col">

            <ul class="list-unstyled">

                <li class="row">
                    <span class="col-2 bg-dark text-light">ID</span>
                    <span class="col">{{ $game->id }}</span>
                </li>

                <li class="row">
                    <span class="col-2 bg-dark text-light">Name</span>
                    <span class="col">{{ $game->name }}</span>
                </li>

                <li class="row">
                    <span class="col-2 bg-dark text-light">Developer</span>
                    <span class="col">{{ $game->developer->name }}</span>
                </li>

            </ul>


            <form action="/games/{{ $game->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('delete') }}

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection