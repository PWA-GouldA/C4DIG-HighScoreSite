@extends('layouts.layout')

@section('title','Edit | Scores | HiSS')

@section('page-header', 'Edit Score')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/scores/{{ $score->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">Score Title</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Enter score title"
                           value="{{ $score->name }}">
                </div>

                <div class="form-group">
                    <label for="developer">Developer</label>
                    <select name="developer" class="form-control" id="developer">
                        @foreach ($developers as $developer)
                            <option
                                    value="{{ $developer->id }}"
                                    {{ ($score->developer_id==$developer->id ? 'selected' : '') }}>
                                {{ $developer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="/scores" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection