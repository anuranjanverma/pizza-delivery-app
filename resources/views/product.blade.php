<!DOCTYPE html>
<html>
<head>
<title>{{ $product->name }} | Pizza Hot</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
</head>
<body>

@include('partials.nav')

<div class="single">

	<div class="container">
		<div class="col-md-12">
			<div class="col-md-6 grid">
				<img src="/images/{{ $product->url }}" data-imagezoom="true" class="img-responsive">
			</div>	
			<div class="col-md-6 single-top-in">
				<div class="single-para simpleCart_shelfItem">
					<h1>{{ $product->name }}</h1>
					<p>{{ $product->description }}</p>
					
						<label  class="add-to item_price">${{ $product->price }}</label>
					
					<div class="available">
						<h6>Available Options :</h6>
						<ul>
							<li>Cost: <select>
									<option>USD ($)</option>
									<option>EUR (€)</option>
								</select>
							</li>
							<!-- <li><a href="#" class="add-pizza">Add To Cart</a></li> -->
							<li>
								<form action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="name" value="{{ $product->name }}">
									<input type="hidden" name="price" value="{{ $product->price }}">
									<button type="submit" class="add-pizza">Add to Cart</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>

@include('partials.might-like')

@include('partials.footer')

<!-- slide -->
<script src="/js/jquery.min.js"></script>
<script src="/js/imagezoom.js"></script>
<!-- start menu -->
<link href="/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="/js/simpleCart.min.js"> </script>
<!--initiate accordion-->

<!---pop-up-box---->
<link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
</body>
</html>