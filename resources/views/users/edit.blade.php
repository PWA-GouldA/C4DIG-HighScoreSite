@extends('layouts.layout')

@section('title','Edit | Users | HiSS')

@section('page-header', 'Edit User')

@section('content')
    <div class="row">
        <div class="col">
            <form action="/users/{{ $user->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">User Title</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Enter user title"
                           value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="developer">Developer</label>
                    <select name="developer" class="form-control" id="developer">
                        @foreach ($developers as $developer)
                            <option
                                    value="{{ $developer->id }}"
                                    {{ ($user->developer_id==$developer->id ? 'selected' : '') }}>
                                {{ $developer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="/users" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>
@endsection

@section('footer-extras')

@endsection