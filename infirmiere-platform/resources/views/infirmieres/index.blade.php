@extends('layouts.app')

@section('content')

<h3>Search Infirmières</h3>

<form method="GET" action="/search" class="mb-3">
    <input name="specialite" class="form-control mb-2" placeholder="Specialité">
    <button class="btn btn-primary">Search</button>
</form>

<hr>

@foreach($infirmieres as $inf)
<div class="card mb-2 p-3">

    <h5>{{ $inf->user->nom }}</h5>
    <p>Specialité: {{ $inf->specialite }}</p>

    @if(auth()->check() && auth()->user()->role == 'patient')

    <form method="POST" action="/reserver">
        @csrf

        <input type="hidden" name="infirmiere_id" value="{{ $inf->user_id }}">

        <input type="date" name="date" class="form-control mb-1">
        <input type="text" name="heure" class="form-control mb-1" placeholder="Heure">

        <button class="btn btn-success btn-sm">Réserver</button>
    </form>

    @endif

</div>
@endforeach

@endsection