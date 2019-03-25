@extends('layouts.layout')

@section('title','Developers | HiSS')

@section('page-header', 'Developers')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <a href="/developers/create" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i>
                Add
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                <li class="row bg-dark text-light">
                    <span class="col-1">ID</span>
                    <span class="col">Developer Name</span>
                    <span class="col"># Games</span>
                    <span class="col-2">Actions</span>
                </li>
                @foreach($developers as $developer)
                    <li class="row mt-1 pb-1 border-bottom">
                        <a class="col" href="/developers/{{ $developer->id }}">
                            <span class="row">
                            <span class="col-1">{{ $developer->id }}</span>
                            <span class="col">{{ $developer->name }}</span>
                            <span class="col">{{ $developer->games->count() }}</span>
                        </span>
                        </a>
                        <span class="col-2">
                            <form class="form-inline" action="/developers/{{ $developer->id }}">
                                <div class="btn-group" role="group" aria-label="Editing actions">
                                <button type="submit" class="btn btn-info btn-sm"
                                        aria-label="information">
                                    <i class="fas fa-info-circle"></i>&nbsp;
                                </button>

                                <button type="submit" class="btn btn-warning btn-sm"
                                        formaction="/developers/{{$developer->id}}/edit"
                                        aria-label="edit">
                                    <i class="fas fa-edit"></i>&nbsp;
                                </button>
                                <button type="submit" class="btn btn-danger btn-sm"
                                        formaction="/developers/{{$developer->id}}/delete"
                                        aria-label="delete">
                                    <i class="fas fa-times">  </i>
                                </button>
                                    </div>
                            </form>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection