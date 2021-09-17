
@extends('master')
@section("content")
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        @foreach($post as $value)
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="{{url('stories/'.$value->id)}}"><img src="{{ asset('uploads/'.$value->image) }}" alt="" /></a>
								<h4>{{ $value->title }}</h4>	
								<p>{!! $value->short_desc !!}</p>
								<label>###</label>
							</div>
							<div class="clearfix"></div>
						</div>
                        @endforeach
					</div>	
    				</div>
				</div>	
			</div>					
	</div>
	<!--end-single-->
@endsection
