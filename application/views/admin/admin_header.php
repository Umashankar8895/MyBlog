<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<!--<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"> -->
	<?= link_tag('assets/css/bootstrap.min.css');?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
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
        <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
      </li>
    </ul>
    <a class="nav-link my-2 my-sm-0" href="javascript:history.go(-1)">Go Back</a>
    <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
  </div>
</nav>