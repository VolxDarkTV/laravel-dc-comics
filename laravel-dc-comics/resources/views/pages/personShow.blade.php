@extends('layouts.main-layouts')

@section('head')
    <title>Person Show</title>
@endsection

@section('main')
    
    <section class="container">
        <div class="d-flex flex-column">
            <span> Name: {{ $person -> firstName }} </span>
            <span> Surname:  {{ $person -> lastName }} </span>
            <span> Date: {{$person -> dateOfBirth}} </span>
        </div>
    </section>

@endsection