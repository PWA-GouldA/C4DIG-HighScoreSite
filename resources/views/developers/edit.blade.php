@extends('layouts.layout')

@section('title','Edit | Developers | HiSS')

@section('page-header', 'Edit Developer')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/developers/{{ $developer->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">Developer Title</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Enter developer title"
                           value="{{ $developer->name }}">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="/developers" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection