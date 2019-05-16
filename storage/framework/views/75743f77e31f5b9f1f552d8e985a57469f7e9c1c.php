<!doctype html> 
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

.container{
    background-color:#FFF8DC;
    position: relative;
}
.box{
    margin:20px;
    
}
.title{
    font-family: 微軟正黑體;
	font-size: 30px;
	line-height: 2;
	text-indent: 40px;
    background-color:#E0FFFF;
    padding: 5px 0;
    }
.content{
    font-family: 微軟正黑體;
    font-size: 14px;
	line-height: 2;
	text-indent: 32px;
    background-color:#FFE4E1;
}
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
  color: black;
  text-shadow: 0 2px 3px rgba(0, 0, 0, 0.8);
  filter: grayscale(20%); }
.h1{
    color : black;
}


</style>
</head>
<header class="jumbotron" id="header">
      
          <div class="container text-center">
          <h2>CHUN WEI'S BLOG</h2>
            <p>Life would be too smooth if it had no rubs in it.</p>
  
          </div>
    </header>

<body>
      
<div class="container">

     <div class="row">
    <div class="col-12 col-md-6 box">
        <img src="<?php echo e(asset($article->image)); ?>" class="img-thumbnail" alt="" width = 550px height =450px >
    </div>
    <div class="col-6 col-md-4 box">
        <div class="title"><?php echo e($article->title); ?> <br></div>
        <div class="content"><?php echo e($article->content); ?><br></div>
    </div>

  </div>
  <iframe src="<?php echo e(asset($article->map)); ?>" width='100%'  height="600" frameborder="0" style="border:1px" allowfullscreen></iframe>
  <a href="/articles"> <img src="<?php echo e(asset('img/home.gif')); ?>" text-align:center alt="">HOME
</div>


</body>