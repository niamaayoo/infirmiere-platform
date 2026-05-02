@extends('layouts.app')

@section('content')

<h3>📋 Mes rendez-vous</h3>

@foreach($rendezvous as $rdv)

<div class="card p-2 mb-2">

    <p>👩‍⚕️ Infirmière ID: {{ $rdv->infirmiere_id }}</p>
    <p>📅 {{ $rdv->date }} - ⏰ {{ $rdv->heure }}</p>
    <p>Status: 
        <span class="badge bg-info">{{ $rdv->status }}</span>
    </p>

</div>

@endforeach

@endsection