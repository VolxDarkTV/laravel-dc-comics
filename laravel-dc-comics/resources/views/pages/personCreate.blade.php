@extends('layouts.main-layouts')

@section('head')
    <title>Add Person</title>
@endsection

@section('main')
    <h3>Create</h3>

    @include('components.errors')
    
    <form method="POST" action="{{ route('person.Store') }}">
        @csrf
        <label for="firstName">firstName</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">dateOfBirth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>
@endsection