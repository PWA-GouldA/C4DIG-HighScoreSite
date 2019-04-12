@extends('layouts.layout')

@section('title','Home | HiSS')

@section('page-header', 'Welcome to HiSS')

@section('content')
    <div class="row">
        <div class="col">
            <p>HiSS - <b>Hi</b>gh <b>S</b>core <b>S</b>ite</p>
            <p>This site is for students who are studying the Certificate IV of Digital and Interactive Games,
                Diploma in Digital and Interactive Games, Diploma in Software Development, and other courses.</p>
        </div>
        <div class="col">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection

@section('footer-extras')

@endsection
