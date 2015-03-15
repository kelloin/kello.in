<!DOCTYPE html>
<html lang="en">
<head>
	<title>Karthik Nataraj</title>
	<link rel="icon" type="image/png" sizes="16x16" href="http://www.kello.in/images/icons/favicons/favicon-16x16.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/styles-desktop.css">
	<link rel="stylesheet" href="css/styles-mobile.css">
</head>
<body>

<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/">Kello.in</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#"><span class="glyphicon glyphicon-home" style="font-size: 1em"></span><span class="sr-only">(current)</span></a></li>
			<li><a href="/">Profile</a></li>
			<li><a href="/">Photo Gallery</a></li>
			<li><a href="//blog.kello.in">Blog</a></li>
			<li><a href="/">Reach me</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	@yield('content')
	
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			  <div style="padding: 15px 0;">
			  Copyright &copy; 2015
			  <span class="pull-right">
				<span class="hide-on-mobile">Developed using: </span>
				<img src="images/icons/php_icon.png" alt="PHP" border="0" title="PHP 5" />
				<img src="images/icons/laravel_icon.png" alt="Laravel" border="0" title="Laravel" />
				<img src="images/icons/bootstrap_icon.png" alt="Bootstrap" border="0" title="Bootstrap" />
				<img src="images/icons/jquery_icon.png" alt="Jquery" border="0" title="Jquery" />
			  </span>
			  </div>			  
		</div>
	</nav>
	
</div>

</body>
</html>
