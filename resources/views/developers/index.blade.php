@extends('layouts.layout')

@section('title','Developers | HiSS')

@section('page-header', 'Developers')

@section('content')
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                <li class="row bg-dark text-light">
                    <span class="col-1">ID</span>
                    <span class="col">Name</span>
                    <span class="col-1">Games</span>
                </li>
                @foreach($developers as $developer)
                    <li class="row">
                        <span class="col-1">{{ $developer->id }}</span>
                        <span class="col">{{ $developer->name }}</span>
                        <span class="col-1">{{ $developer->games()->count() }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection