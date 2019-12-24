<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="col-sm-4 world">
				<ul >
					<li>
						<select class="in-drop1">
						  	<option>USD ($)</option>
						  	<option>EUR (€)</option>
						</select>
					</li>
				</ul>
			</div>

			<div class="col-sm-4 logo">
				<a href="{{ route('home') }}" class="logo-name">Pizza Hot</a>	
			</div>
		
			<div class="col-sm-4 header-left">		
				<p class="log"><a href="account.html">Login</a>
					<span>/</span><a href="account.html">Signup</a></p>
				<div class="cart box_1">
					<a href="{{ route('cart.index') }}">
						<h3><div class="total"><span class="">${{ Cart::subtotal() }}</span></div>
							<img src="/images/cart.png" alt=""/>
							<span class="item-number">{{ Cart::instance('default')->count() }}</span>
						</h3>
					</a>
					<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="container header-bottom">
		<div class="head-top">
			<div class="col-sm-2 number">
				<span><i class="glyphicon glyphicon-phone"></i>+7-9995194535</span>
			</div>
	 		<div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					<li class=" grid"><a  href="{{ route('home') }}">Home</a></li>
				    <li class="grid"><a href="{{ route('shop.index') }}">Menu</a></li>
					<li><a href="typo.html">Blog</a></li>				
					<li><a class="color6" href="contact.html">Contact</a></li>
			    </ul> 
			</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
			<div class="clearfix"></div>
			<!---pop-up-box---->
				<script type="text/javascript" src="/js/modernizr.custom.min.js"></script>    
				<link href="/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="/js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login">
						<input type="submit" value="">
						<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
					</div>
					<p>	Shopping</p>
				</div>				
			</div>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});																
				});
			</script>
		</div>
	</div>
</div>
