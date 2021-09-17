@extends('layouts.app');
@section('content')
@forelse($notifications as $notification)
                            <div class="alert alert-success" role="alert">
                                [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['name'] }}) has just registered.
                            </div>
                            @php
                            $notification->markAsRead();
                            @endphp
 @endforeach
<div class="card-header">
                <a href="{{ route('home') }}">Quay lại</a>
            </div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Danh mục</th>
    </tr>
  </thead>
  @php
    $count=1;
  @endphp
  <tbody>
    @foreach($category as $value)
    <tr>
      <th scope="row">{{ $count }}</th>
      <td>{{$value->title}}</td>
      <td><a class="btn btn-success" href="{{ route('category.show',[$value->id]) }}">{{ 'Edit' }}</a></td>
      <td>
        <form action="{{ route('category.destroy',[$value->id]) }}" method="post">
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