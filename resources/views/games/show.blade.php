@extends('layouts.layout')

@section('title','Games | HiSS')

@section('page-header', 'Games')

@section('content')
    <div class="row mb-2">
        <div class="col text-right">
            <a href="/games/create" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
            <a href="/games/{{ $game->id }}/edit" class="btn btn-outline-warning">
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
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection