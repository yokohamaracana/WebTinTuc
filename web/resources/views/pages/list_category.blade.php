
@extends('master')
@section("content")
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        @foreach($all_category as $value)
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="{{ url('category/'.$value->id) }}">{{ $value->title }}</a>

						</div>
                        @endforeach
					</div>	
    				</div>
				</div>	
			</div>					
	</div>
	<!--end-single-->
@endsection
