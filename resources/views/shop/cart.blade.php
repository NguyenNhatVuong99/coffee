@extends('layouts.shop')
@section('content')
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>STT</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody id="list_cart">
								@if (Session::has('cart')) 
									@php
										$index=1;
									@endphp
									@foreach ($carts as $key => $product)

										<tr class="text-center">
											
											<td>
												@php
													echo $index;
													$index++;
												@endphp
											</td>
											<td class="image-prod"><div class="img" style="background-image:url(images/menu-2.jpg);"></div></td>
											
											<td class="product-name">
												<h3>{{ $product['productInfo']['name']}}</h3>
												{{-- <input type="text" class="form-control" placeholder="Ghi chú"> --}}

											</td>
											
											<td class="price">{{ $product['productInfo']['price'] }}</td>
											
											<td class="quantity">
												<div class="input-group mb-3">
													<a onclick="minus_quantity"  href="javascript:minusQuantity({{ $product['productInfo']['id'] }})" id="icon_minus"  style="bordeR: 1px solid rgba(255, 255, 255, 0.1);padding: 12px 10px; width:54px"><span class="icon-minus"></span></a>

													<input  name="quantity"  class="quantity_cart form-control " id="quantity_{{ $product['productInfo']['id'] }}" value="{{ $product['quantity'] }}" min="1" max="100">
													{{--  <span class="icon-minus"></span>  --}}
													<a role="button" id="icon_plus" href="javascript:plusQuantity({{ $product['productInfo']['id'] }})"  style="bordeR: 1px solid rgba(255, 255, 255, 0.1);padding: 12px 10px; width:54px"><span class="icon-plus"></span></a>

												</div>
											</td>
											<td class="product-remove">
												<a href="javascript:updateCart({{$product['productInfo']['id']  }});" ><span class="icon-save fa-2x"></span></a>
											</td>
											<td class="total">{{ number_format($product['price']) }}</td>
											
											<td class="product-remove">
												<a href="javascript:deleteCart({{$product['productInfo']['id']  }});" ><span class="icon-close"></span></a>
											</td>
										</tr>
									@endforeach
								@endif
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-4 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
						  <div class="form-group">
							<input type="text" id="" name="note" class="form-control" placeholder="Ghi chú">
						  </div>
						  <div class="form-group">
							<input type="text" id="code_promotion" name="code" class="form-control" placeholder="Mã giảm giá">
						  </div>
						  <p class="error_code text-center" style="color: #C49B63"></p>
						  <div class="form-group">
							<input onclick="promotion()" type="submit" value="Áp dụng" class="btn btn-primary py-3 px-5">
						  </div>
    				</div>
    			</div>
    			<div class="col col-lg-4 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
						  <div class="form-group">
							<input type="text" id="code_promotion" name="code" class="form-control" placeholder="Mã giảm giá">
						  </div>
						  <p class="error_code text-center" style="color: #C49B63"></p>
						  <div class="form-group">
							<input onclick="promotion()" type="submit" value="Áp dụng" class="btn btn-primary py-3 px-5">
						  </div>
						
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span id="subPrice">{{ isset($subPrice)?number_format($subPrice)." VNĐ":" 0 VNĐ " }}</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span id="delivery">{{ isset($delivery)?number_format($delivery)." VNĐ":" 0 VNĐ " }}</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span id="discount">{{ isset($discount)?number_format($discount)." %":" 0 % " }}</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
							<span id="totalPrice">{{ isset($totalPrice)?number_format($totalPrice)." VNĐ":" 0 VNĐ " }}</span>
							<input type="hidden" id="currency" value="{{ isset($totalPrice)?number_format($totalPrice):"" }}">
							{{-- <span style="display: none" id="currency">{{ $totalPrice }}</span> --}}
    					</p>
    					<p class=" total-price">
    						<span class="text-center" style="width:100%" id="nameMoney"></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Đặt hàng</a></p>
    			</div>
    		</div>
			</div>
		</section>
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
		
    {{--  <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>  --}}
	@endsection
	