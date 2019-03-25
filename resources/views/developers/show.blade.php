@extends('layouts.layout')

@section('title','Developers | HiSS')

@section('page-header', 'Developers')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="/developers/create" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
            <a href="/developers/{{ $developer->id }}/edit" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="/developers/{{ $developer->id }}/delete" class="btn btn-outline-danger">
                <i class="fas fa-times"></i> Delete
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">ID</span>
                    <span class="col bg-dark text-light">{{ $developer->id }}</span>
                </li>

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">Name</span>
                    <span class="col bg-dark text-light">{{ $developer->name }}</span>
                </li>

                <li class="row mb-1">
                    <span class="col-sm-12 col-md-4 col-lg-2">Created</span>
                    <span class="col bg-gray-600 text-light">
                        {{ $diffCreate  }}
                    </span>
                </li>

                <li class="row">
                    <span class="col-sm-12 col-md-4 col-lg-2">Updated</span>
                    <span class="col bg-gray-600 text-light">
                        {{ $diffUpdate }}
                    </span>
                </li>

            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection