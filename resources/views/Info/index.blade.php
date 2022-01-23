<?php
@extends('layout')

@section('title')
    Info
@endsection

@section('content')
    <main>
        <h1>@yield('title')</h1>
            <p>Deze applicatie is speciaal gemaakt voor CI. Veel plezier.</p>
        <br>
        <p>Wil je zelf meer info toevoegen? Dat kan hier!</p>
        <h3><a href="{{ route('FAQ.create') }}">Create New FAQ</a></h3>
    </main>
@endsection
