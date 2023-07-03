@extends('index')

@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pricing</h1>
          </div>
        </div>
      </div>
	  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="100" height="100"><circle cx="12" cy="10" r="4" fill="#d8d8ff" class="colord8d8ff svgShape"></circle><path fill="#6563ff" d="M14.976 12.65A3.974 3.974 0 0 1 12 14a3.974 3.974 0 0 1-2.975-1.35 7.997 7.997 0 0 0-4.815 5.6A10 10 0 0 0 12 22a10 10 0 0 0 7.79-3.75 7.986 7.986 0 0 0-4.814-5.6z" class="color6563ff svgShape"></path><path fill="#b2b1ff" d="M9.025 12.65A3.969 3.969 0 0 1 8 10a4 4 0 1 1 8 0 3.969 3.969 0 0 1-1.024 2.65 7.985 7.985 0 0 1 4.807 5.578 9.932 9.932 0 0 0 2.197-6.238c0-5.512-4.468-9.98-9.98-9.98s-9.98 4.468-9.98 9.98c0 2.362.825 4.529 2.197 6.238a7.996 7.996 0 0 1 4.808-5.578z" class="colorb2b1ff svgShape"></path></svg>
    </section>

    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Per Hour Rate</th>
						        <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-1.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
						        	</div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
						        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-2.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-3.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-4.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->


						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-5.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->


						      <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-6.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->
						    </tbody>
						</table>
					</div>
    			</div>
    		</div>
		</div>
	</section>
  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}
@endsection