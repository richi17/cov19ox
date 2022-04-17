@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Emergency</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 pb-15 m-auto">
                <div>
                    <p class="mb-5">Dear customers, in order to assure the safety of everyone during this pandemic time, please be aware and contact the emergency service in your city or an ambulance in case of serious condition.</p>
                </div>
                <div>
                    @if(!$contacts->isEmpty())
                    <table class="table table-bordered">
                        <thead>
                            <th>City</th>
                            <th>Ambulances</th>
                            <th>Center of diseases control and prevention</th>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>
                                        {{ $contact->province }}
                                    </td>
                                    <td>
                                        {{ $contact->city }}
                                    </td>
                                    <td>
                                        {{ $contact->number }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <span class="danger">No emergency contact !</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
