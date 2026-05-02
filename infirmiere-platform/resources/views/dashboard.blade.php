@extends('layouts.app')

@section('content')

<h2>Welcome {{ auth()->user()->nom }}</h2>

@if(auth()->user()->role == 'patient')
    <p>👤 Patient Dashboard</p>
    <a href="/infirmieres" class="btn btn-primary">Find Nurses</a>
@endif

@if(auth()->user()->role == 'infirmiere')
    <p>🩺 Infirmière Dashboard</p>
    <a href="/rendezvous/list" class="btn btn-info">My Appointments</a>
@endif

@if(auth()->user()->role == 'admin')
    <p>⚙️ Admin Dashboard</p>
@endif

@endsection