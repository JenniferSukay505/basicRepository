<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		​
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		​
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
		​
		<!--  MY CUSTOM CSS  -->
		<!-- <link rel="stylesheet" href="/css/master.css"> -->
		​
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		​
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/additional-methods.min.js"></script>
		​
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		​
		<!--  MY CUSTOM JS GOES HERE!!!!@!-->
		<!-- <script type="text/javascript" src="custom.js"></script> -->
		<title>Bootstrap Example</title>
	</head>
	<body>
		<!--header with photo-->
		<!--header img outside container allows background (set in css) to stretch the full width of the browser and
		the content that fits within this container section-->
		<header class= "bgimage">
			<nav class="navbar navbar-inverse">
				<!--logo and mobile toggle button grouped together for better mobile display-->
				<div class="navbar-header">
					<!--mobile menu button-->
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main menu">
						<span class="sr-only">main menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<a class="navbar-brand" href="#">Loren ipsum</a>
				</div>
				<!-- main links used for toggling-->
				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="navbar-nav navabar-right">
						<li><a href="#">Nowhere</a></li>
						<li><a href="#">NoWhere</a></li>
						<li><a href="#">Nowhere</a></li>
						<li><a href="#">Nowhere</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<!--fixed or fluid container-->
		<div class="container">
			<!-- Rows must be placed within a certain container time- fluid or fixed.  Rows prepare containers so they can
			hold columns,  Si rows should always include columns which is how to achieve most bs layouts-->
			<!--Adding a row gets rid of container padding using negative margins because columns inside row need
			to clear out normal container padding to align to grid properly-->
			<!--see computed grid in Inspect Element on browser-->
			<div class="row">
				<!--column follows row in container-->
				<!-- divide columns by 12 to take up the whole page-->

						<div class="col-md-12">
							<h1>Loren ipsum</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
								Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
								Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
						</div>
					</div>
						<div class="col-md-3">
							<h1>Lorem ipsum</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
								Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
								Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
						</div>

						<div class="col-md-3">
							<h1>Lorem ipsum</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
								Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
								Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
						</div>

						<!-- inside container never reaches the full length of the screen-->
						<!--fixed-width container shows a specific size depending on the size of the viewport-->
						<!-- fixed-width adjusts to the size of media-query breakpoints-->
						<!-- fluid class container adjusts to the size of the device. Not used here-->

						<div class="container-fluid">
							<div class="row">

								<div class="col-md-3">
									<h1>Loren Ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
										Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
										Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								</div>

								<div class="col-md-3">
									<h1>Loren Ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
										Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
										Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
								</div>

								<div class="col-md-12">
									<h1>Loren ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
										Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
										Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
								</div>

								<div class="col-md-6">
									<h1>Lorem ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
										Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
										Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								</div>

								<div class="col-md-6">
									<h1>Lorem ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
										Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
										Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="col-md-8">
									<a href="#">Lorem ipsum</a>
									<a href="#">Lorem ipsum</a>
									<a href="#">Lorem ipsum</a>
								</div>
								<div class="col-md-4">
									<p class="muted pull-right">Lorem ipsum dolor sit amet, consectetuer </p>
								</div>
							</div>
						</div>
					</div>
					<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
					<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
					<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
					<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>
					<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
					<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
					<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
					<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>
</body>