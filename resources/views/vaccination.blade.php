@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Vaccination</h1>
                            <div class="col text-center">
                            @if(session('user')->is_vaccinated == 1)
                                <h5 class="text-success">
                                    You're vaccinated !
                                </h5>
                            @else
                                <h5 class="text-danger">
                                   You should vaccinate as soon as possible !️
                                </h5>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
