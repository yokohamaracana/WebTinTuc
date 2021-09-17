@extends('master')
@section('content')
@foreach($data as $value)
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

@endsection