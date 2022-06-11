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
									@if($area == 1)
										{{QrCode::size(200)->color(0,100,0)->generate('Safe area!')}}
									@elseif($area == 2)
										{{QrCode::size(200)->color(255,204,0)->generate('Risk area!')}}
									@elseif($area == 3)
										{{QrCode::size(200)->color(255,0,0)->generate('High-risk area!')}}
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
