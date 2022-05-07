@extends('layouts.default')

@section('content')
    @if(session('user')->is_admin == 0)
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
                                       You should update your vaccination document as soon as possible !️
                                    </h5>
                                    @if(session('success'))
                                        <div class="alert alert-success text-center mt-5">{{ session('success') }}</div>
                                    @endif
                                    <div class="card-block px-lg-7 px-4 mt-5">
                                        <h5 class="mb-3">Formulaire d'ajout</h5>
                                        <form method="post" action='/addVaccination' enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input class="form-control" type="file" id="img" name="img" placeholder="Covid certificate" value="{{ old('covid_certificate') }}">
                                            </div>
                                            <button class="btn btn-dark mb-4 w-100" type="submit">Send</button>
                                        </form>
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="pt-4 pb-16">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-10 m-auto">
                        <div class="row">
                            <div class="col text-center">
                                <h1 class="mt-6 mb-5">Documents</h1>
                            </div>
                        </div>
                        <div class="card-block px-4 pb-5">
                            <div class="mt-5">
                                <h5 class="mb-3">Documents list</h5>
                                @if(!$documents->isEmpty())
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>User name</th>
                                            <th>Document</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($documents as $document)
                                                <tr>
                                                    <td>
                                                        {{ $document->first_name }} {{ $document->last_name }}
                                                    </td>
                                                    <td>
                                                        <img class="card-img-top" src="{{ asset($document->img_url) }}" alt="{{ $document->img_id }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <span class="danger">No documents !</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
