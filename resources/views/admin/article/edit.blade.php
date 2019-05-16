@extends('layouts.app')


@section('content')
    <h1>編輯文章</h1>

    {{-- 用引用的方式 --}}
    {{--@include('errors')--}}

    {{-- 直接寫 --}}
    @if (count($errors) > 0)
        <!-- 表單錯誤清單 -->
        <div class="alert alert-danger">
            <strong>哎呀！出了些問題！</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <!-- 新文章的表單 -->
    {{-- <form action="{{asset('/admin/article/'.$article->id)}}" method="POST" class="form-horizontal"> --}}
        <form action="{{route('admin.article.update', [$article->id])}}" method="POST" class="form-horizontal">
            @csrf
            {{ method_field('put') }}

            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" value={{$article->title}} name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">圖片網址</label>
                <input type="text" value="{{$article->image}}" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" value="{{$article->content}}" class="form-control" id="content" rows="3">{{$article->content}}</textarea>
            </div>
             <div class="form-group">
                <label for="content">地圖位址</label>
                <textarea name="map"  value="{{ $article->map}}" class="form-control" id="map" rows="3">{{$article->map}}</textarea>
            </div>

            <!-- 增加文章按鈕-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">修改完成</button>
            </div>
        </form>
    </div>
@endsection