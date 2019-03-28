@extends('layouts.layout')

@section('title','Create | Games | HiSS')

@section('page-header', 'Add Game')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/games" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Game Title</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter game title">
                </div>

                <div class="form-group">
                    <label for="developer">Developer</label>
                    <select name="developer" class="form-control" id="developer">
                        @foreach ($developers as $developer)
                            <option value="{{ $developer->id }}">{{ $developer->name }}</option>
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