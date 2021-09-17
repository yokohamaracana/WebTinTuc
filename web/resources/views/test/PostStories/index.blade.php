@extends('layouts.app');
@section('content')
<div class="card-header">
                <a href="{{ route('home') }}">Quay lại</a>
            </div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mô tả ngắn</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Thể loại</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  @php
    $count=1;
  @endphp
  <tbody>
    @foreach($post as $value)
    <tr>
      
      <th scope="row">{{ $count }}</th>
      <th scope="row">{!! $value->short_desc !!}</th>
      <th scope="row">{!! $value->desc !!}</th>
      <th scope="row"><img width="100px" src="{{ asset('uploads/'.$value->image) }}" alt=""></th>
      <th scope="row">{{ $value->category->title }}</th>
      <td ><a class="btn btn-success" href="{{ route('post.show',[$value->id]) }}">{{ 'Edit' }}</a></td>
      <td>
        <form action="{{ route('post.destroy',[$value->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger" value="delete">
        </form>
      </td>
    </tr>
    @php
      $count++;
    @endphp
    @endforeach
  </tbody>
</table>
@endsection