@extends('layouts.app')

@section('content')

<h3>📅 Réserver un rendez-vous</h3>

<form method="POST" action="/reserver">
    @csrf

    <div class="mb-2">
        <label>Infirmière</label>
        <input type="text" name="infirmiere_id" class="form-control">
    </div>

    <div class="mb-2">
        <label>Date</label>
        <input type="date" name="date" class="form-control">
    </div>

    <div class="mb-2">
        <label>Heure</label>
        <input type="text" name="heure" class="form-control">
    </div>

    <button class="btn btn-success">Confirmer</button>
</form>

@endsection