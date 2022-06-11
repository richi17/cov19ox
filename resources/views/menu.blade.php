@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Welcome
                                <span>@if(session('user')->first_name){{ session('user')->first_name }}@endif</span>
                                <span>@if(session('user')->last_name){{ session('user')->last_name }}@endif</span> !
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




