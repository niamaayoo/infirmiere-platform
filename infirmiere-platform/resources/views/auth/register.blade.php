@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">

        <h3>Register</h3>

        <form method="POST" action="/register">
            @csrf

            <input name="nom" class="form-control mb-2" placeholder="Nom">

            <input name="email" class="form-control mb-2" placeholder="Email">

            <input type="password" name="password" class="form-control mb-2" placeholder="Password">

            <select name="role" class="form-control mb-2">
                <option value="patient">Patient</option>
                <option value="infirmiere">Infirmière</option>
            </select>

            <button class="btn btn-success w-100">Register</button>
        </form>

    </div>
</div>
@endsection