@extends('index')

@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Choose Your Car</h1>
			</div>
			</div>
		</div>
    </section>
		
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
				@foreach($Cars as $car)
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.html">{{ $car['model'] }}</a></h2>
								<div class="d-flex mb-3">
									<span class="cat">{{ $car['brand'] }}</span>
									<p class="price ml-auto">$500 <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <button type="button" class="btn btn-secondary py-2 ml-1" data-bs-toggle="modal" data-bs-target="#EditCar{{ $car['car_id'] }}"></button> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
				@endforeach
    		</div>
    		<div class="row mt-5">
          		<div class="col text-center">
					<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
					</div>
          		</div>
        	</div>
    	</div>
    </section>

	@foreach($Cars as $cars)
		<div class="modal fade" id="EditCar{{ $cars['car_id'] }}" tabindex="-1">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Car Data</h5>
					</div>
					<div class="modal-body">
						<form action="{{ route('car.storeEdit') }}" method="POST" class="row g-3 needs-validation" novalidate>
							@csrf
							<input type="hidden" name="car_id" id="car_id" value="{{ $cars['car_id'] }}">
							<div class="col-md-3">
								<div class="form-floating">
									<input type="text" name="brand" id="brand" class="form-control" value="{{ $cars['brand'] }}" placeholder="Brand" required>
									<label for="brand">Brand</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-floating">
									<input type="text" name="model" id="model" class="form-control" value="{{ $cars['model'] }}" placeholder="Model" required>
									<label for="model">Model</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-floating">
									<input type="text" name="type" id="type" class="form-control" value="{{ $cars['type'] }}" placeholder="Type" required>
									<label for="type">Type</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-floating">
									<input type="text" name="color" id="color" class="form-control" value="{{ $cars['color'] }}" placeholder="Color" required>
									<label for="color">Color</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<input type="text" name="capacity" id="capacity" class="form-control" value="{{ $cars['capacity'] }}" placeholder="Capacity" required>
									<label for="capacity">Capacity</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
									<input type="text" name="year" id="year" class="form-control" value="{{ $cars['year'] }}" placeholder="Year" required>
									<label for="year">Year</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating">
										<input type="text" name="registration_number" id="registration_number" class="form-control" value="{{ $cars['registration_number'] }}" placeholder="Registration Number" required>
										<label for="registration_number">Registration Number</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<div class="form-floating">
										<input type="text" name="vin" id="vin" class="form-control" value="{{ $cars['vin'] }}" placeholder="VIN" required>
										<label for="vin">VIN</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-floating">
									<input type="text" name="engine_number" id="engine_number" class="form-control" value="{{ $cars['engine_number'] }}" placeholder="Engine Number" required>
									<label for="engine_number">Engine Number</label>
								</div>
							</div>
							<div class="text-center mb-3">
								<button class="btn btn-primary rounded-pill" onclick="getContent()" type="submit">
									<span>
										Submit
									</span>
								</button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	@endforeach

@endsection