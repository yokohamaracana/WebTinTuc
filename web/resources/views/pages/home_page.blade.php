@extends('master')
@section('content')
	<!--banner-starts-->
	<div class="banner">
		<div class="container size_1">
			<div id="carouselId" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselId" data-slide-to="0" class="active bg-info"></li>
					<li data-target="#carouselId" data-slide-to="1" class="bg-info"></li>
					<li data-target="#carouselId" data-slide-to="2" class="bg-info"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					@php
						$count=1;
					@endphp
					@foreach($post_cap as $value)
					@if($count == 1)
						<div class="carousel-item active">
							<img src="{{ asset('uploads/'.$value->image) }}" alt="">
							<a class="text-decoration-none" href="{{ url('stories/'.$value->id) }}">{{ $value->title }}</a>
						</div>
					@else
						<div class="carousel-item">
							<img src="{{ asset('uploads/'.$value->image) }}" alt="">
							<a class="text-decoration-none" href="{{ url('stories/'.$value->id) }}">{{ $value->title }}</a>
						</div>
					@endif
					@php
						$count++;
					@endphp
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<p>Thông tin web</p>
						<h3>Về nhóm chúng tôi</h3>
					</div>
					<div class="about-two">
						<a href=""><img src="images/c-1.jpg" alt="" /></a>
						<p>website này được thực hiện bởi NoHope Team để demo cho phần tiểu luận cuối kì môn công nghệ phần mềm.</p>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
                        @foreach($post as $value)
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="{{ url('stories/'.$value->id) }}"><img src="{{ asset('uploads/'.$value->image) }}" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="single.html">{{ $value->title }}</a></h3>
								<p>{!! $value->short_desc !!}</p>
								<label>###</label>
							</div>
							<div class="clearfix"></div>
						</div>
                        @endforeach
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<!-- <div class="abt-1">
						<h3>ABOUT US</h3>
						<div class="abt-one">
							<img src="images/c-2.jpg" alt="" />
							<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
							<div class="a-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div> -->
					<div class="abt-2">
						<h3>Có thể bạn thích</h3>
                        @foreach($post_limit as $value)
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="{{ url('stories/'.$value->id) }}" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">{{ $value->title }}</a></h4>
									<p>{!! $value->short_desc !!}</p> 
								</div>
								<div class="clearfix"></div>
							</div>	
                        @endforeach							
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
@endsection
