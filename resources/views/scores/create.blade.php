@extends('layouts.layout')

@section('title','Create | Scores | HiSS')

@section('page-header', 'Add Score')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/scores" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="score">Score</label>
                    <input type="text" name="score" id="score" class="form-control" placeholder="Enter score">
                </div>

                <div class="form-group">
                    <label for="user">User</label>
                    <select name="user" class="form-control" id="user">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="game">User</label>
                    <select name="game" class="form-control" id="game">
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection