@extends('layouts.default')

@section('content')
	<div class="pt-4 pb-16">
			<div class="container">
				<div class="row mt-5">
					<div class="col-lg-6 col-md-10 m-auto">
						<div class="row">
							<div class="col text-center">
								<h1 class="mt-6 mb-5">Healthcode</h1>
								<div>
									@if($area == 'Safe')
										@if(session('user')->is_vaccinated == 1)
											<div class="mb-3">
												{{QrCode::size(250)->color(2, 117, 216)->generate('Blue: No high risk, vaccinated')}}
											</div>
											<span>No high risk, vaccinated</span>
										@else
											<div class="mb-3">
												{{QrCode::size(250)->color(92, 184, 92)->generate('Orange: No high risk, non vaccinated')}}
											</div>
											<span>No high risk, non vaccinated</span>
										@endif
									@endif
									@if($area == 'Danger')
										@if(session('user')->is_vaccinated == 1)
											<div class="mb-3">
												{{QrCode::size(250)->color(240, 173, 78)->generate('Green: High risk, vaccinated')}}
											</div>
											<span>High risk, vaccinated</span>
										@else
											<div class="mb-3">
												{{QrCode::size(250)->color(217, 83, 79)->generate('Red: High risk, non vaccinated')}}
											</div>
											<span>High risk, non vaccinated</span>
										@endif
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
