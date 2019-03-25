@extends('layouts.layout')

@section('title','Create | Developers | HiSS')

@section('page-header', 'Add Developer')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/developers" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Developer Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection