@extends('layouts.layout')

@section('title','Create | Users | HiSS')

@section('page-header', 'Add User')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/users" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" name="user" id="user" class="form-control" placeholder="Enter user">
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