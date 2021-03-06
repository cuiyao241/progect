@extends('layout.home')

@section('title','前台的首页')

@section('content')
	<div class="w3slideraits">
			<div class="fluid_dg_wrap fluid_dg_emboss pattern_1 fluid_dg_white_skin" id="fluid_dg_wrap_4">
				@foreach($res as $k=>$v)
				
				<div data-thumb="/images/slide-1-small.jpg" data-src="{{$v->pic}}"></div>				
				@endforeach
			</div>
		</div>

	<!-- Model-Slider -->
	<div class="agilemodel-slider">
		<div id='film_roll_1'>

			@foreach($pro as $ak=>$av)
			<div>

				<img src="{{$av->pic}}" alt="Groovy Apparel">

			</div>
			@endforeach

		</div>
	</div>
	<!-- //Model-Slider -->


	<!-- Latest-Arrivals -->
	<div class="wthreehome-latest">
		<div class="container">

			<div class="wthreehome-latest-grids">

				@foreach($pth as $k=>$v)
					<div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid1">
						<div class="grid">
							<figure class="effect-apollo">

								<!-- <img src="/images/home-latest-1.jpg" alt="Groovy Apparel"> -->
								<img src="{{$v->pic}}" alt="Groovy Apparel">
								<figcaption></figcaption>
							</figure>
						</div>
						<h4>{{$v->title}}</h4>
						<h5>{{$v->content}}</h5>
						<h6><a href="{{$v->url}}?title={{$v->title}}">Shop Now</a></h6>
					</div>
				@endforeach
				
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //Latest-Arrivals -->


	<!-- Winter-Collection -->
	<div class="wthreewinter-coll">
		<div class="container">
			<h1>BRACE YOURSELVES! WINTER IS COMING...</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="wthreeshop-a">
				<a href="home/list/all?title=商品列表">马上抢购</a>
			</div>
		</div>
	</div>
	<!-- //Winter-Collection -->

	<!-- Denim-Collection -->
	<div class="wthreedenim-coll">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="/images/style-1.jpg" alt="Groovy Apparel">
				<div class="style-grid-1-text">
					<h3>DENIM JEANS</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
					<div class="wthreeshop-a">
						<a href="womens.html">SHOP DENIM COLLECTION</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 style-grid style-grid-2">
				<div class="style-image-1">
					<img src="/images/style-2.jpg" alt="Groovy Apparel">
					<div class="style-grid-2-text">
						<h3>WATER REPELLENT</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
					</div>
				</div>
				<div class="style-image-2">
					<img src="/images/style-3.jpg" alt="Groovy Apparel">
					<div class="style-grid-2-text">
						<h3>STITCHED TO PERFECTION</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //Denim-Collection -->



	<!-- Clearance-Sale -->
	<div class="aitsclearance-sales">
		<div class="aitsclearance-sales-text">
			<h2>ALL CLEARANCE ITEMS</h2>
			<h4>BUY ONE AND GET ONE FREE</h4>
			<h5>50% OFF <small>On selected products<sup>*</sup></small></h5>
			<div class="wthreeshop-a">
				<a href="mens.html">SHOP NOW</a>
			</div>
		</div>
	</div>
	<!-- //Clearance-Sale -->



	<!-- Shopping -->
	<div class="agileshopping">
		<div class="container">

			<div class="agileshoppinggrids">
				<div class="col-md-6 agileshoppinggrid agileshoppinggrid1">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="/images/mens.jpg" alt="Groovy Apparel">
							<figcaption></figcaption>
						</figure>
					</div>
				</div>
				<div class="col-md-6 agileshoppinggrid agileshoppinggrid2">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="/images/womens.jpg" alt="Groovy Apparel">
							<figcaption></figcaption>
						</figure>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="agileshoppinggrids-bottom">
				<h3>CHOOSE THE BEST FOR YOU</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
				<div class="agileshoppinggrids-bottom-grids">
					<div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid1">
						<div class="wthreeshop-a">
							<a href="mens.html">SHOP MEN</a>
						</div>
					</div>
					<div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid2">
						<div class="wthreeshop-a">
							<a href="womens.html">SHOP WOMEN</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!-- //Shopping -->



	<!-- Newsletter -->
	<div class="agileinfonewsl">

		<h3>SIGN UP FOR NEWSLETTER</h3>
		<p>Subscribe to us to get highest-level access to our new styles and trends</p>
		<div class="wthreeshop-a">
			<a class="popup-with-zoom-anim" href="#small-dialog3">SUBSCRIBE</a>
		</div>

			<!-- Popup-Box -->
			<div id="popup2">
				<div id="small-dialog3" class="mfp-hide agileinfo">
					<div class="pop_up">
						<h4>SUBSCRIBE</h4>
						<form action="#" method="post">
							<input class="email aitsw3ls" type="email" placeholder="Email" required="">
							<input type="submit" class="submit" value="SUBSCRIBE">
						</form>
					</div>
				</div>
			</div>
			<!-- //Popup-Box -->

	</div>
	<!-- //Newsletter -->



    <div class="agileheader-banner">
		<img src="/homes/images/banner.jpg" alt="Groovy Apparel">
	</div>
@endsection

@section('js')

@endsection