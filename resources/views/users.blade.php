@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Users</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 pb-15 m-auto">
                <div>
                    @if(!$allUsers->isEmpty())
                        <table class="table table-bordered">
                            <thead>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone number</th>
                                <th>Is vaccinated ?</th>
                            </thead>
                            <tbody>
                                @foreach ($allUsers as $user)
                                    <tr>
                                        <td>
                                            {{ $user-> first_name }}
                                        </td>
                                        <td>
                                            {{ $user-> last_name }}
                                        </td>
                                        <td>
                                            {{ $user-> phone_number }}
                                        </td>
                                        <td>
                                            {{ $user-> is_vaccinated }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <span class="danger">No user !</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
