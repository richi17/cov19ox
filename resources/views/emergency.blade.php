@extends('layouts.default')

@section('content')
    @if(session('user')->is_admin == 0)
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
                    <div class="mb-3">
                        <form method="post" action='/searchEmergency' class="form-inline my-2 my-lg-0 ml-auto" type="submit">
                            @csrf
                            <input class="form-control bg-white" type="search" name="searchBar" placeholder="Recherche" aria-label="Recherche">
                        </form>
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
    @else
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5 pt-3">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Emergency</h1>
                        </div>
                    </div>
                    <div class="card-block px-lg-7 px-4 pb-5">
                        <h5 class="mb-3">Add form</h5>
                        <form method="post" action='/addEmergency' enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input class="form-control rounded" type="text" name="province" placeholder="Province" value="{{ old('province') }}">
                                @error('province')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control rounded" type="text" name="city" placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control rounded" type="text" name="number" placeholder="Number" value="{{ old('number') }}">
                                @error('number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-dark mb-4 w-100" type="submit">Add</button>
                        </form>
                        <div class="mb-3">
                            <form method="post" action='/searchEmergency' class="form-inline my-2 my-lg-0 ml-auto" type="submit">
                                @csrf
                                <input class="form-control bg-white" type="search" name="searchBar" placeholder="Recherche" aria-label="Recherche">
                            </form>
                        </div>
                        <div class="mt-5">
                            <h5 class="mb-3">Emergency contacts list</h5>
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
        </div>
    </div>
    @endif
@endsection
