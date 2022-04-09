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
                    <table class="table table-bordered">
                        <thead>
                            <th>City</th>
                            <th>Ambulances</th>
                            <th>Center of diseases control and prevention</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Beijing
                                </td>
                                <td>
                                    120, 199, 4008-919191
                                </td>
                                <td>
                                    010-64212461
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Shanghai
                                </td>
                                <td>
                                    120
                                </td>
                                <td>
                                    021-62758710
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hangzhou
                                </td>
                                <td>
                                    120, 999
                                </td>
                                <td>
                                    0571-85155039
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Shenzhen
                                </td>
                                <td>
                                    120
                                </td>
                                <td>
                                    13603065281
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Guangzhou
                                </td>
                                <td>
                                    120
                                </td>
                                <td>
                                    020-83822400
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wuhan
                                </td>
                                <td>
                                    120, 85726646
                                </td>
                                <td>
                                    027-85805111, 027-88872638
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tianjin
                                </td>
                                <td>
                                    120
                                </td>
                                <td>
                                    022-24333453
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
