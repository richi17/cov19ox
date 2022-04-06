@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5 pt-3">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Register</h1>
                        </div>
                    </div>
                    <div class="card-block px-lg-7 px-4 pb-5">
                        @if(session('error'))
                            <div class="alert alert-danger text-center">{{ session('error') }}</div>
                        @endif
                        <form method="post" action='/register'>
                            @csrf
                            <div class="form-group mb-3">
                                <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First name" value="{{ old('first_name') }}">
                            </div>
                            <div class="form-group  mb-3">
                                <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="number" id="id_number" name="id_number" placeholder="Id number" value="{{ old('id_number') }}">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="number" id="phone_number" name="phone_number" placeholder="Phone number" value="{{ old('phone_number') }}">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="file" placeholder="Covid certificate" value="{{ old('covid_certificate') }}">
                            </div>
                            <button class="btn btn-dark text-white mb-4 w-100" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
