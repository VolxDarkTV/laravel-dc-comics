@extends('layouts.main-layouts')

@section('head')
    <title>Add Person</title>
@endsection

@section('main')
    <h3>Create</h3>

    <form method="POST" action="{{ route('person.Store') }}">
        @csrf
        <label for="firstName">Name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Surname</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Blessing date</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Miracle count</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>
@endsection