@extends('layouts.main-layouts')

@section('head')
    <title>Add Person</title>
@endsection

@section('main')

    <section class="container">
        
        <div class="d-flex flex-column align-items-center">
            
            <h3 class="rounded bg-success p-2 mb-3">CREATE</h3>
        
            @include('components.errors')
        
            <form method="POST" action="{{ route('person.Store') }}">
                @csrf
                <label for="firstName">First Name</label>
                <input type="text" name="firstName">
                <br>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName">
                <br>
                <label for="dateOfBirth">Date of Birth</label>
                <input type="date" name="dateOfBirth">
                <br>
                <label for="height">Height</label>
                <input type="number" name="height" placeholder="not request">
                <br>
                <input type="submit" value="CREATE NEW PERSON">
            </form>
        </div>

    </section>
@endsection