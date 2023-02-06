@extends('layouts.main-layouts')

@section('head')
    <title>PersonHome</title>
@endsection

@section('main')
    <h1>Person Home</h1>

    @foreach ($people as $person)
        <li>
            <a href="{{ route('personShow', $person) }}">
                {{ $person -> firstName}}
            </a>
        </li>
    @endforeach
@endsection