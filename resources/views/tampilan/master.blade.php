<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="tampilan/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navbar -->
			@include('tampilan.nav')
			<!-- End Navbar -->
			<!-- Thumbnail -->
			@include('tampilan.thumbnail')
			<!-- end Thumbnail  -->
			<div class="jumbotron">
				@yield('content')
			</div>
		</div>
	</div>
</div>

    <script src="tampilan/js/jquery.min.js"></script>
    <script src="tampilan/js/bootstrap.min.js"></script>
    <script src="tampilan/js/scripts.js"></script>
  </body>
</html>