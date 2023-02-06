@extends('layouts.main-layouts')

@section('head')
    <title>Update Person</title>
@endsection

@section('main')
    <h3>Update Person</h3>

    <form method="POST" action="{{ route('person.Update', $person) }}">
        @csrf
        <label for="firstName">Name</label>
        <input type="text" name="firstName" value="{{$person -> firstName}}">
        <br>
        <label for="lastName">Surname</label>
        <input type="text" name="lastName" value="{{$person -> lastName}}">
        <br>
        <label for="dateOfBirth">Blessing date</label>
        <input type="date" name="dateOfBirth" value="{{$person -> dateOfBirth}}">
        <br>
        <label for="height">Miracle count</label>
        <input type="number" name="height" value="{{$person -> height}}">
        <br>
        <input type="submit" value="Update NEW PERSON">
    </form>
@endsection