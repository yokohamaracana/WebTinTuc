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

                <form autocomplete="off"  action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text"  class="form-control" name="title" id="" placeholder="tiêu đề...">
                        <label for="title">Hình ảnh</label>
                        <input type="file" name="image" id="" class="form-control">
                        <label for="title">Mô tả ngắn</label>
                        <textarea name="short_desc" id="ckeditor_shortdesc" cols="30" rows="5" class="form-control" placeholder="Mô tả ngắn..." style="resize:none"></textarea>
                        <label for="title">Nội dung</label>
                        <textarea name="desc" id="ckeditor_desc" cols="30" rows="5" class="form-control" placeholder="Nội dung..." style="resize:none"></textarea>
                        <label for="title">Danh mục</label>
                        <select name="post_category_id" id="" class="form-control">
                            @foreach($category as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                            @endforeach
                        </select>
                        <input type="submit" class="btn btn-primary mt-2" value="Thêm bài viết">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection