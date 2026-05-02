@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">

        <h3>Login</h3>

        <form method="POST" action="/login">
            @csrf

            <input type="email" name="email" class="form-control mb-2" placeholder="Email">

            <input type="password" name="password" class="form-control mb-2" placeholder="Password">

            <button class="btn btn-primary w-100">Login</button>
        </form>

    </div>
</div>
@endsection