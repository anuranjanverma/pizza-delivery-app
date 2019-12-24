<!DOCTYPE html>
<html>
<head>
<title>Cart | Pizza Hot</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
</head>
<body>

@include('partials.nav')

<div class="container">
	@if (session()->has('success_message'))
		<div class="alert alert-success">
			{{ session()->get('success_message') }}
		</div>
	@endif

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="check-out">
		<h1>Shopping Cart</h1>
	@if (Cart::count() > 0)

		<h4>{{ Cart::count() }} item(s) in the cart.</h4>

    @else

    	<h4>No items in the cart!</h4>

    @endif
	    <table>
			<tr>
				<th>Item</th>
				<th>Qty</th>		
				<th>Prices</th>
				<th>Subtotal</th>
				<th></th>
		    </tr>

		    @foreach (Cart::content() as $item)
	  		<tr>
				<td class="ring-in"><a href="{{ route('shop.show', $item->model->slug) }}" class="at-in"><img src="images/{{ $item->model->url }}" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5>{{ $item->model->name }}</h5>
						<p>{{ $item->model->description }}</p>
					</div>
					<div class="clearfix"> </div>
				</td>
				<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
				<td>${{ $item->model->price }}</td>
				<td>${{ $item->model->price }}</td>
				<td>
					<div class="cart-action">
						<!-- <a href="">Remove</a> -->
						<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}

							<button type="submit" class="cart-options">Remove</button>
						</form>
						<!-- <a href="">Save for Later</a> -->
					</div>
				</td>
			</tr>
			@endforeach

		</table>
		<div class="col-sm-12">
			<div class="col-md-6">
				<p>Taxes and Delivery charges are applied as per government norms.</p>
			</div>
			<div class="col-md-6">
				<div class="price-outer">
					<label>Subtotal: </label>
					<p>${{ Cart::subtotal() }}</p>
				</div>
				<div class="price-outer">
					<label>Tax: </label>
					<p>${{ Cart::tax() }}</p>
				</div>
				<div class="price-outer">
					<label>Total: </label>
					<p>${{ Cart::total() }}</p>
				</div>
			</div>
		</div>
		<a href="{{ route('shop.index') }}" class=" to-shop">Continue Shopping</a>
		<a href="{{ route('checkout.index') }}" class=" to-buy">Proceed to Checkout</a>
		<div class="clearfix"></div>
    </div>
</div>

@include('partials.might-like')

@include('partials.footer')

</body>
</html>