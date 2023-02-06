@extends('layouts.main-layouts')

@section('head')
    <title>Update Person</title>
@endsection

@section('main')
    <h3>Update Person</h3>

    @include('components.errors')
    
    <form method="POST" action="{{ route('person.Update', $person) }}">
        @csrf
        <label for="firstName">firstName</label>
        <input type="text" name="firstName" value="{{$person -> firstName}}">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName" value="{{$person -> lastName}}">
        <br>
        <label for="dateOfBirth">dateOfBirth</label>
        <input type="date" name="dateOfBirth" value="{{$person -> dateOfBirth}}">
        <br>
        <label for="height">height</label>
        <input type="number" name="height" value="{{$person -> height}}">
        <br>
        <input type="submit" value="Update NEW PERSON">
    </form>
@endsection