<!doctype html> 
 <!--   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style type="text/css" link rel="stylesheet" href="css/style.css">
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>LIN CHUN WEI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bundle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- todo jquery-easing.js -->
  <script src="resources/js/jquery.slim.min.js"></script>
    <script src="resources/js/bootstrap.min.css.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <style type="text/css">
    
.jumbotron {
  font-family: Bookman;
  padding-top: 100px;
  padding-bottom: 100px;
  margin-bottom: 0;
  width: 100%;
  height: 400px;
  background-image:url("../img/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
  text-shadow: 0 2px 3px rgba(0, 0, 0, 0.8);
  filter: grayscale(20%); }


}
  </style>
</head>

<!-- Header -->
<header class="jumbotron" id="header">
      
          <div class="container text-center">
          <h1>CHUN WEI'S BLOG</h1>
            <p>Life would be too smooth if it had no rubs in it.</p>
  
          </div>
    </header>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/articles"><img src="{{asset('img/logo.gif')}}" width="70px" height="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/articles">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/article/">Login</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <h1 class="my-4">文章閱讀
          <small>景點介紹</small>
        </h1>

        <!-- Blog Post -->
       @foreach ($articles as $article) 
        <div class="card mb-4">
          <img class="card-img-top" src="{{$article->image}}" width = 500px height =700px alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{$article->short}}</p>
            <a href="/article/{{$article->id}}" class="btn btn-primary">看更多內容 &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            更新於{{$article->updated_at}}

          </div>
        </div>
        @endforeach
      </div>

  </div>
<!-- Page Content -->
{{-- <div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      @foreach ($articles as $article) 
      <div class="card border-0 shadow">
       

        <img src="{{$article->image}}"  class="img-circle" alt="" width = 400px height =400px >

        <div class="card-body text-center">
          <h5 class="card-title mb-0">{{$article->title}}</h5>
     
       <a href="/article/{{$article->id}}">
     <div class="card-text text-black-50"><button type="button" class="btn btn-primary">看更多內容</button> </a>
   
    </div>
   
    <!--<img src="" alt="" width = 600px height = 300px >-->
    <!--內容：{{$article->content}}<br>-->
  

@endforeach
        {{-- <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div> --}}
 
  </div>
  <!-- /.row -->

</div> --}}
<!-- /.container -->

{{-- 
    <header class="jumbotron" id="header">
      
          <div class="container text-center">
          <h1>CHUN WEI'S BLOG</h1>
            <p>Life would be too smooth if it had no rubs in it.</p>
  
          </div>
    </header>
<body>
      <p>
      <p>
@foreach ($articles as $article)
<div class="container">
 
     <img src="{{asset($article->image)}}"  class="img-circle" alt="" width = 400px height =300px >
     <h5>{{$article->title}}</h5>
     
       <a href="/article/{{$article->id}}">
     <button type="button" class="btn btn-primary">看更多內容</button> </a>
   <br>
       <p>
    </div>
   
    <!--<img src="{{$article->image}}" alt="" width = 600px height = 300px >-->
    
   
    <!--內容：{{$article->content}}<br>-->
  

@endforeach --}}

</body>
@include('layouts.footer')