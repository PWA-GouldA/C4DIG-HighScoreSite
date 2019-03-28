@extends('layouts.layout')

@section('title','About | HiSS')

@section('page-header', 'About Us')

@section('content')
    <div class="row">
        <div class="col-lg-7 col-md-8 col-sm-12">
            <h2>What is HiSS?</h2>
            <p>HiSS, or <stromg>Hi</stromg>gh <strong>S</strong>core <strong>S</strong>ite, is a small web
                application that provides Certificate IV and Diploma students with a simple API for developing High
                Score Tables as part of their game development.</p>
            <h2>Background</h2>
            <p>Born from a need for a more professional approach to the teaching of a high score component to games,
                this simple system provides the student with a method of connecting their game to a centralised
                storage facility for their game.
            </p>
            <p>The high scores will be stored as integers</p>
            <p>Each game has exactly one 'development company'</p>
            <p>Each 'development' company may have many games</p>
            <p>Each user may play many games</p>
            <p>Each user may belong to one developer</p>

        </div>
    </div>
@endsection

@section('footer-extras')

@endsection