@extends('layouts.app')

@section('content')
    <h1>文章列表</h1>
    <div class="col-sm-12 py-4">
        <a class="btn btn-primary" href="/admin/article/create" role="button">新增文章</a>
    </div>
    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">文章標題</th>
            <th scope="col">圖片</th>
            <th scope="col">更新日期</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$article->title}}</td>
            <td><img src="/{{$article->image}}" width = 150px height =150px></td>
            <td>{{$article->updated_at}}</td>
            <td>
                <br>
                 <form action="{{route('admin.article.delete', [$article->id])}}" method="POST">
                    @csrf <!--laravel 內建form安全 每個form都要使用-->
                    {{ method_field('DELETE') }}
                    <button class="btn btn-outline-danger">刪除</button>
                </form>
                <br>
                <form action="{{route('admin.article.edit', [$article->id])}}" method="GET">
                    <button class="btn btn-outline-primary">編輯</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection