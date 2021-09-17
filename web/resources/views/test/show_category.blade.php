@extends('layouts.app');
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <a href="{{ route('home') }}">Quay lại</a>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @endif

                <form autocomplete="off"  action="{{ route('category.update',[$category->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" value="{{ $category->title }}" class="form-control" name="title" id="" placeholder="tiêu đề...">
                        <input type="submit" class="btn btn-primary mt-2" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection