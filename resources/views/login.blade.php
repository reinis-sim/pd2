@extends('layout')

@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-md-4 offset-md-4">

            @if ($errors->any())
                <div class="alert alert-danger">Neizdevās pieslēgties, lūdzu, mēģiniet vēlreiz!</div>
            @endif

            <form method="POST" action="/authenticate">
                @csrf

                <div class="form-group">
                    <label for="login-name">Vārds</label>

                    <input
                        type="text"
                        name="name"
                        id="login-name"
                        value="{{ old('name') }}"
                        class="form-control"
                        autocomplete="off"
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="login-password">Parole</label>

                    <input
                        type="password"
                        name="password"
                        id="login-password"
                        class="form-control"
                    >
                </div>

                <button type="submit" class="btn btn-primary">Pieslēgties</button>
            </form>

        </div>
    </div>

@endsection
