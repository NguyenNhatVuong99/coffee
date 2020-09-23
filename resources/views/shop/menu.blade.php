@extends('layouts.shop')
@section('content')
<section class="ftco-intro">
	<div class="container-wrap">
		<div class="wrap d-md-flex align-items-xl-end">
			<div class="info">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-phone"></span></div>
						<div class="text">
							<h3>000 (123) 456 7890</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-my_location"></span></div>
						<div class="text">
							<h3>198 West 21th Street</h3>
							<p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-clock-o"></span></div>
						<div class="text">
							<h3>Open Monday-Friday</h3>
							<p>8:00am - 9:00pm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="book p-4">
				<h3>Book a Table</h3>
				<form action="#" class="appointment-form">
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<div class="input-wrap">
						<div class="icon"><span class="ion-md-calendar"></span></div>
						<input type="text" class="form-control appointment_date" placeholder="Date">
					</div>
						</div>
						<div class="form-group ml-md-4">
							<div class="input-wrap">
						<div class="icon"><span class="ion-ios-clock"></span></div>
						<input type="text" class="form-control appointment_time" placeholder="Time">
					</div>
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
				  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group ml-md-4">
				  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
				</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

{{--  <section class="ftco-section">
	<div class="container">
	<div class="row">
		<div class="col-md-6 mb-5 pb-3">
			<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-1.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Cornish - Mackerel</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-2.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Roasted Steak</span></h3>
						<span class="price">$29.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-3.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Seasonal Soup</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-4.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Chicken Curry</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 mb-5 pb-3">
			<h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-5.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Sea Trout</span></h3>
						<span class="price">$49.91</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-6.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Roasted Beef</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-7.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Butter Fried Chicken</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dish-8.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Chiken Filet</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dessert-1.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Cornish - Mackerel</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dessert-2.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Roasted Steak</span></h3>
						<span class="price">$29.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dessert-3.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Seasonal Soup</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/dessert-4.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Chicken Curry</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/drink-5.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Sea Trout</span></h3>
						<span class="price">$49.91</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/drink-6.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Roasted Beef</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/drink-7.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Butter Fried Chicken</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url(images/drink-8.jpg);"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>Chiken Filet</span></h3>
						<span class="price">$20.00</span>
					</div>
					<div class="d-block">
						<p>A small river named Duden flows by their place and supplies</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>  --}}

<section class="ftco-menu mb-5 pb-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">
		  <span class="subheading">Discover</span>
		<h2 class="mb-4">Our Products</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	  </div>
	</div>
		<div class="row d-md-flex">
			<div class="col-lg-12 ftco-animate p-md-5">
				<div class="row">
			  <div class="col-md-12 nav-link-wrap mb-5">
				<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					@php
						$arr_category_id=array();
					@endphp
				  @foreach ($categories  as $key=> $item)
					@php
						array_push($arr_category_id,$item->id)
					@endphp
					  @if($key==0)
						  <a class="nav-link active" id="v-pills-{{ $item->id }}-tab" data-toggle="pill" href="#v-pills-{{ $item->id }}" role="tab" aria-controls="v-pills-{{ $item->id }}" aria-selected="true">{{ $item->name }}</a>
					  @else
						  <a class="nav-link" id="v-pills-{{ $item->id }}-tab" data-toggle="pill" href="#v-pills-{{ $item->id }}" role="tab" aria-controls="v-pills-{{ $item->id }}" aria-selected="true">{{ $item->name }}</a>
					  @endif
				  @endforeach
				</div>
			  </div>
			  <div class="col-md-12 d-flex align-items-center">
				
				<div class="tab-content ftco-animate" id="v-pills-tabContent">
					@foreach ($arr_category_id as $key=> $category_id)
						@if($key==0)
							<div class="tab-pane fade show active" id="v-pills-{{ $category_id }}" role="tabpanel" aria-labelledby="v-pills-{{ $category_id}}-tab">
								<div class="row">
									@foreach ($products as $product)
										@if($category_id==$product->category_id)
											<div class="col-md-4 text-center">
												<div class="menu-wrap">
													<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish-1.jpg);"></a>
													<div class="text">
															<input type="hidden" name="id" value="{{ $product->id }}">
															<input type="hidden" name="name" value="{{ $product->name }}">
															<input type="hidden" name="price" value="{{ $product->price }}">
															<h3><a href="#">{{ $product->name }}</a></h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
															<p class="price"><span>{{ $product->price }}</span></p>
															<input onclick="AddCart({{ $product->id }})"  class="btn btn-primary btn-outline-primary" value="Add to cart">
													</div>
												</div>
											</div>
										@endif
									@endforeach
								</div>
							</div>
						@else
							<div class="tab-pane fade show" id="v-pills-{{ $category_id }}" role="tabpanel" aria-labelledby="v-pills-{{ $category_id}}-tab">
								<div class="row">
									@foreach ($products as $product)
										@if($category_id==$product->category_id)
											<div class="col-md-4 text-center">
												<div class="menu-wrap">
													<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish-1.jpg);"></a>
													<div class="text">
														<input type="hidden" id="product_id" value="{{ $product->id }}">
															{{--  <input type="hidden" name="name" value="{{ $product->name }}">  --}}
															{{--  <input type="hidden" name="price" value="{{ $product->price }}">  --}}
															<h3><a href="#">{{ $product->name }}</a></h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
															<p class="price"><span>{{ $product->price }}</span></p>
															<input onclick="AddCart({{ $product->id }})" class="btn btn-primary btn-outline-primary" value="Add to cart">
													</div>
												</div>
											</div>
										@endif
									@endforeach
								</div>
							</div>
						@endif
					@endforeach

				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</section>

@endsection
@section('js')
	<script>
	
		function DeleteCart(id){
			console.log(id);
			$.ajaxSetup({
			      headers: {
			          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      }
			  });
			  $.ajax({
			      type: 'post',
			      dataType: 'json',
			      url: './deleteCart',
			      data: {
			          id: id,
			      },
			      success: function(result) {
			          alertify.success('Success message');
			      }
			  });
		}
	</script>
{{--  	
	function AddCart(id) {
		console.log(id);
		//  $.ajaxSetup({
		//      headers: {
		//          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		//      }
		//  });
		//  $.ajax({
		//      type: 'post',
		//      dataType: 'json',
		//      url: './addCart',
		//      data: {
		//          id: id,
		//      },
		//      success: function(result) {
		//          alertify.success('Success message');
		//      }
		//  });
	}  --}}
@endsection