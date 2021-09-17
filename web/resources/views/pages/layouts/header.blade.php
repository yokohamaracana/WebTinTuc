	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="{{  asset('/trang-chu') }}"><img src="{{ asset('images/icon.jpg') }}" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<!-- <li><a href="{{  asset('home') }}"  class="active">Home</a></li> -->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class="navigation">
					<span class="menu"></span>
					<ul class="navig">
						@foreach($category as $value)
						<li><a href="{{ url('category/'.$value->id) }}">{{ $value->title }}</a></li>
						@endforeach
						<li><a href="{{ url('list-category') }}">...</a></li>
						<li><a class="red" href="{{ url('admin') }}">login admin</a></li>
					</ul>
				</div>
				<div class="header-right">
					<div class="search-bar">
						<form action="{{  url('search') }}" method="post">
							@csrf
							<input type="text" name="keyword" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
					<ul>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function() {
			$(" ul.navig").slideToggle("slow", function() {});
		});
	</script>
