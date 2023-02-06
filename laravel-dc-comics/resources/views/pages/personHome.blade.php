@extends('layouts.main-layouts')

@section('head')
    <title>PersonHome</title>
@endsection

@section('main')
    <h1>Person Home</h1>
    <a href="{{route('person.Create')}}">Create</a>
    @foreach ($people as $person)
        <li>
            <a href="{{ route('person.Show', $person) }}">
                {{ $person -> firstName}}
            </a>
            <a href="{{route('person.Edit', $person)}}">E</a>
            <a href="{{route('person.Delete', $person)}}">x</a>
        </li>
    @endforeach
@endsection