@extends('layouts.app')

@section('content')

<h2>🩺 Infirmière Dashboard</h2>

<p>Bienvenue {{ auth()->user()->nom }}</p>

<div class="row mt-3">

    <div class="col-md-6">
        <div class="card p-3">
            <h5>📅 Mes rendez-vous</h5>
            <p>Consulter et gérer les demandes des patients.</p>
            <a href="/rendezvous/list" class="btn btn-primary btn-sm">Voir</a>
        </div>
    </div>

</div>

@endsection