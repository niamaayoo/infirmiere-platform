@extends('layouts.app')

@section('content')

<h2>👤 Patient Dashboard</h2>

<p>Bienvenue {{ auth()->user()->nom }}</p>

<div class="row mt-3">

    <div class="col-md-6">
        <div class="card p-3">
            <h5>🔎 Trouver une infirmière</h5>
            <a href="/infirmieres" class="btn btn-success btn-sm">Rechercher</a>
        </div>
    </div>

</div>

@endsection