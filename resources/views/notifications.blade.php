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
                                @if(!$notifications->isEmpty())
                                @foreach ($notifications as $notification)
                                    <div class="mb-3">
                                        <h5>
                                            {{ $notification->title }}
                                        </h5>
                                        <span>
                                            {{ $notification->message }}
                                        </span>
                                    </div>
                                @else
                                    <h5>
                                        No notification !
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
