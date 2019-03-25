@extends('layouts.layout')

@section('title','Edit | Developers | HiSS')

@section('page-header', 'Edit Developer')

@section('content')
    <div class="row">
        <div class="col">

            <ul class="list-unstyled">

                <li class="row">
                    <span class="col-2 bg-dark text-light">ID</span>
                    <span class="col">{{ $developer->id }}</span>
                </li>

                <li class="row">
                    <span class="col-2 bg-dark text-light">Name</span>
                    <span class="col">{{ $developer->name }}</span>
                </li>

            </ul>


            <form action="/developers/{{ $developer->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('delete') }}

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection