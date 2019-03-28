@extends('layouts.layout')

@section('title','Users | HiSS')

@section('page-header', 'Users')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="/users/create" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="/users/{{ $user->id }}/delete" class="btn btn-outline-danger">
                <i class="fas fa-times"></i> Delete
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">ID</span>
                    <span class="col bg-dark text-light">{{ $user->id }}</span>
                </li>

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">Name</span>
                    <span class="col bg-dark text-light">{{ $user->name }}</span>
                </li>

                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Developer</span>
                    <span class="col bg-dark text-light">{{ $user->pivot->developer_id }}</span>
                </li>


                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Created</span>
                    <span class="col bg-dark text-light">
                        {{ $diffCreate  }}
                    </span>
                </li>


                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Updated</span>
                    <span class="col bg-dark text-light">
                        {{ $diffUpdate }}
                    </span>
                </li>

            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection