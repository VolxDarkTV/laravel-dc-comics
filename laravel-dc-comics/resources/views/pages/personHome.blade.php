@extends('layouts.main-layouts')

@section('head')
    <title>PersonHome</title>
@endsection

@section('main')
    <section id="my_home" class="container">
        {{-- <h1 class="fw-bold text-center mb-5">Person Home</h1> --}}

        {{-- <div class="d-flex justify-content-center">
            <a class="btn btn-success my-3" href="{{route('person.Create')}}">Create</a>
        </div> --}}

        <ul class="row row-cols-4 d-flex flex-wrap text-center">

            @foreach ($people as $person)
                <li class="my_card d-flex">
                    <a class="border w-50 text-truncate" href="{{ route('person.Show', $person) }}">
                        {{ $person -> firstName}}
                    </a>
                    <a class="border w-50 text-truncate" href="{{route('person.Edit', $person)}}">E</a>
                    <a class="border w-50 text-truncate" href="{{route('person.Delete', $person)}}">x</a>
                </li>
            @endforeach

        </ul>
    </section>
@endsection