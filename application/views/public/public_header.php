<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<!--<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"> -->
	<?= link_tag('assets/css/bootstrap.min.css');?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?= anchor('','Home',['class'=>'nav-link']); ?>
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <?= anchor('login','Login',['class'=>'nav-link']); ?>
        <!-- <a class="nav-link" href="#">Login</a> -->
      </li>
    </ul>
     <?= form_error('query',"<p class='text-danger'>",'</p>')."&nbsp;&nbsp;&nbsp;"; ?>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
      <?= form_open('user/search',['class'=>'form-inline my-2 my-lg-0','role'=>'search']) ?>
      <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    <?= form_close(); ?>

  </div>
</nav>