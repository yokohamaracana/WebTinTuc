@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('category.create') }}"><button class="btn btn-primary w-100 mb-2">Thêm danh mục bài viết</button></a>
                    <a href="{{ route('category.index') }}"><button class="btn btn-primary w-100 mb-2">Xem danh mục bài viết</button></a>
                    <a href="{{ route('post.create') }}"><button class="btn btn-primary w-100 mb-2">Thêm danh bài viết</button></a>
                    <a href="{{ route('post.index') }}"><button class="btn btn-primary w-100 mb-2">Xem danh mục bài viết</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
