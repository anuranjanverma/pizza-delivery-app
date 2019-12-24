<div class="products products-might">
	<div class="container">
		<h1>Might Also Like</h1>
		<div class="col-md-12">
			<div class="content-top1">
					@foreach ($mightAlsoLike as $product)
						<div class="col-md-3 product-card">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="{{ route('shop.show', $product->slug) }}">
									<img class="img-responsive" src="/images/{{ $product->url }}" alt="" />
								</a>
								<h3><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
								<div class="price">
										<h5 class="item_price">${{ $product->price }}</h5>
										<!-- <a href="#" class="item_add">Add To Cart</a> -->
										<form action="{{ route('cart.store') }}" method="POST">
											{{ csrf_field() }}
											<input type="hidden" name="id" value="{{ $product->id }}">
											<input type="hidden" name="name" value="{{ $product->name }}">
											<input type="hidden" name="price" value="{{ $product->price }}">
											<button type="submit" class="add-pizza" style="float: right;">Add to Cart</button>
										</form>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					@endforeach
			
			<div class="clearfix"> </div>
			</div>	
		</div>
<!--//menu-->
	</div>
</div>