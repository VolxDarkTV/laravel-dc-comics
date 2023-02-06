@extends('layouts.main-layouts')

@section('head')
    <title>PersonHome</title>
@endsection

@section('main')
    <h1>Person Home</h1>

    @foreach ($people as $person)
        <h4>{{ $person -> firstName}}</h4>   
    @endforeach
@endsection