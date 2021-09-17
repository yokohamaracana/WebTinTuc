@extends('master')
@section("content")

<!--about-starts-->
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="col-md-8 about-left">
				<div class="about-one">
					<p>Find The Most</p>
					<h3>Coffee of the month</h3>
				</div>
				<div class="about-two">
					<a href="single.html"><img src="{{ asset('images/c-1.jpg') }}" alt="" /></a>
					<p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
					<ul>
						<li>
							<p>Share : </p>
						</li>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="rss"> </span></a></li>
						<li><a href="#"><span class="drbl"> </span></a></li>
					</ul>
				</div>
				<div class="about-tre">
					<div class="a-1">
						@foreach($DanhMuc as $value)
						<div class="row">
							<div class="col-md-6 abt-left">
								<a href="{{  asset('single') }}"><img src="{{ asset('uploads/'.$value->image) }}" alt="" /></a>
							</div>
							<div class="col-md-6 abt-left">
								<h6>Find The Most</h6>
								<h3><a href="{{  asset('single') }}">{{ $value->title }}</a></h3>
								<p>{!! $value->short_desc !!}</p>
								<label>May 29, 2015</label>
								<a class="abt-2" href="{{  asset('single') }}">Read More</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 about-right heading">
			<div class="abt-1">
				<h3>ABOUT US</h3>
				<div class="abt-one">
					<img src="{{ asset('images/c-2.jpg') }}" alt="" />
					<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
					<div class="a-btn">
						<a href="single.html">Read More</a>
					</div>
				</div>
			</div>
			<div class="abt-2">
				<h3>YOU MIGHT ALSO LIKE</h3>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="{{ asset('images/c-12.jpg') }}" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<h4><a href="single.html">Duis consectetur gravida</a></h4>
						<p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="abt-2">
				<h3>ARCHIVES</h3>
				<ul>
					<li><a href="{{ url('archives') }}">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
				</ul>
			</div>
			<div class="abt-2">
				<h3>NEWS LETTER</h3>
				<div class="news">
					<form>
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
						<input type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!--about-end-->
<!--slide-starts-->
<div class="slide">
	<div class="container">
		<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="{{ asset('images/s-1.jpg') }}" class="img-responsive" alt="">
						</div>
					</a>
				</li>
			</ul>

			<script type="text/javascript">
				$(window).load(function() {

					$("#flexiselDemo3").flexisel({
						visibleItems: 5,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 2
							},
							landscape: {
								changePoint: 640,
								visibleItems: 3
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection