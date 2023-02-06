@extends('layouts.main-layouts')

@section('head')
    <title>Person Show</title>
@endsection

@section('main')
    
    <section class="container">
        <div class="d-flex flex-column align-items-center">
            <span class="bg-dark text-light p-1"> Name: {{ $person -> firstName }} </span>
            <span> Surname:  {{ $person -> lastName }} </span>
            <span> Date: {{$person -> dateOfBirth}} </span>
            @if ($person -> height != null)
                <span> Height: {{$person -> height}} </span>    
            @endif
        </div>
    </section>

@endsection