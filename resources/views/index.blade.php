<!DOCTYPE html>
<html>
<head>
<title>Pizza Hot</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>

@include('partials.nav')

<!--banner-->

	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/b1.jpg" alt="">
	       			 </li>
			 		 <li>
	          			<img src="images/b2.jpg" alt="">   
	       			 </li>
					 <li>
	          			<img src="images/b3.jpg" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>

<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Menu</h1>
			<div class="content-top1">
				@foreach ($products as $product)
					<div class="col-md-3 product-card">
						<div class="col-md1 simpleCart_shelfItem">
							<a href="{{ route('shop.show', $product->slug) }}">
								<img class="img-responsive" src="images/{{ $product->url }}" alt="" />
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
	</div>
</div>
<!--//content-->

@include('partials.footer')

</body>
</html>