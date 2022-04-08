@extends('layouts.default')

@section('content')
    <div class="pt-4 pb-16">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="mt-6 mb-5">Epidemic situation</h1>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-center text-white">
                    <div class="card mx-2 bg-dark" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-head-side-cough"></i> Active cases</h5>
                        <span id="active" class="card-text"></span>
                      </div>
                    </div>
                    <div class="card mx-2 bg-warning" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-clinic-medical"></i> Critical cases</h5>
                        <span id="critical" class="card-text"></span>
                      </div>
                    </div>
                    <div class="card mx-2 bg-success" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-check-square"></i> Recovered cases</h5>
                        <span id="recovered" class="card-text"></span>
                      </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center text-white">
                    <div class="card mx-2 bg-info" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-head-side-virus"></i> Total cases</h5>
                        <span id="cases" class="card-text"></span>
                      </div>
                    </div>
                    <div class="card mx-2 bg-danger" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-times"></i> Total deaths</h5>
                        <span id="deaths" class="card-text"></span>
                      </div>
                    </div>
                    <div class="card mx-2 bg-secondary" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-vial"></i> Total test done</h5>
                        <span id="tests" class="card-text"></span>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        fetch('https://corona.lmao.ninja/v2/countries/China')
        .then((response)=>{
            return response.json();
        })
        .then((data)=>{
            console.log(data)
            document.getElementById("cases").innerHTML = data.cases.toLocaleString();
            document.getElementById("critical").innerHTML = data.critical.toLocaleString();
            document.getElementById("deaths").innerHTML = data.deaths.toLocaleString();
            document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
            document.getElementById("tests").innerHTML = data.tests.toLocaleString();
            document.getElementById("active").innerHTML = data.active.toLocaleString();
        })
    </script>
@endsection
