@extends('master')
@section('bootraps')
<!--start-smoth-scrolling-->
	<!--script-->
<script src="{{ asset('js/modernizr.custom.97074.js')}}"></script>
<script src="{{ asset('js/jquery.chocolat.js')}}"></script>
		<link rel="stylesheet" href="{{ asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
		<script type="text/javascript" src="{{ asset('js/jquery.hoverdir.js')}}"></script>
@endsection
@section("content")
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="images/g-1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{asset('images/g-1.jpg')}}" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-2.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-3.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-4.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="images/g-5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-5.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-6.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-7.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-8.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/g-9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/g-9.jpg" alt="" />
							<div>
								<h5>Coffee</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</section>
				
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
	</div>
	<!--gallery-end-->
@endsection