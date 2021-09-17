
@extends('master')
@section("content")
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
						<a href="#"><img class="img-responsive" src="{{ asset('uploads/'.$data->image) }}" alt=" "></a>
					<div class=" single-grid">
						<h4>{{ $data->title }}</h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i>###</span></li>		  						 	
		  					</ul>		  						
							{!! $data->desc !!}
					</div>
					<div class="comments heading">
						<h3>Comments</h3>
						@php
							$count = 1;
						@endphp
					  @foreach($viewer as $value)
					  <div class="media">
					      <div class="media-left">
					        <a href="#">
					        	<img src="" alt="">
					        </a>
					      </div>
					      <div class="media-body">
					        <h4 class="media-heading">{{ '#'.$count }}</h4>
					        <p>{{ $value->title }}</p>
					      </div>
					    </div>
						@php
							$count++;
						@endphp
					@endforeach
						<div class="comment-bottom heading">
    					<h3>Leave a Comment</h3>
					<form action="{{ url('/stories/'.$data->id.'/store') }}" method="post">
					@csrf
						<textarea name="message" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<input type="submit" value="Send">
					</form>
    				</div>
    				</div>
    				<div class="comment-bottom heading">
    					<h3>Tin liên quan</h3>
						<div class="about-tre">
                        @foreach($relative_post as $value)
						<div class="a-1">
							<div class="col-md-12 abt-left">
								<a href="{{ url('stories/'.$value->id) }}"><img src="{{ asset('uploads/'.$value->image) }}" alt="" /></a>
								<h4>{{ $data->title }}</h4>	
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
