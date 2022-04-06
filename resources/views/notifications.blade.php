@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Notifications</h1>
                            <div>
                                @if(session('user')->title && session('user')->message)
                                    <h5>
                                        {{ session('user')->title }}
                                    </h5>
                                    <span>
                                        {{ session('user')->message }}
                                    </span>
                                @else
                                    <h5>
                                        You don't have any notification !
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
