<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico">

    <title>{{PAGE_TITLE}} | CodeIgniter </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min1.css" rel="stylesheet" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/blog.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  
    <script id="dsq-count-scr" src="//blog-com-2.disqus.com/count.js" async></script>

  </head>

  <body>

    <header>

      <div class="blog-header-1">
        <div class="container">
          <div class="row">
          <div class="col-lg-7">
          <h1><?php echo COMPANY_NAME; ?></h1>
          <!--<h1 class="blog-title"></h1>-->
          <p class="lead blog-description">A blog built with Bootstrap and CodeIgniter.</p>
          </div>
          <div class="col-lg-5 column">
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-default my-2 my-sm-0" type="submit">Submit</button>
            </form>
          </div>
          </div>
        </div>
      </div>


    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#a"><img alt="Brand" src="<?php echo base_url(); ?>assets/favicon.ico" width="25px" /></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{menu_home}}"><a class="nav-link" href="<?php echo base_url(); ?>index.php/home">Home</a></li>
            <li class="{{menu_posts}}"><a class="nav-link" href="<?php echo base_url(); ?>index.php/posts">Blog</a></li>
            <li><a class="nav-link" href="#">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            {{LOGIN_LOGOUT}}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      
    </header>

    <main role="main" class="container">

    