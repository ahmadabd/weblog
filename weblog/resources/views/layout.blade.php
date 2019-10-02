<!DOCTYPE html>
<html lang="fa">
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			@font-face{
				font-family:majid;
				src:url('{{asset('/fonts/Iranian Sans.ttf') }}');
			}
		</style>

		<link href="css/layout.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<script src="js/popper.min.js"></script>
		<script src="js/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<title>@yield('title')</title>
	</head>
	<body>


		<!-- content -->
		<div class="container-fluid" style="margin-top:15px">
			<header class="hed1 text-right">
				@yield('header')
			</header>
			<br>
			<article class="sec2 text-right">
				@yield('article')
			</article>

			<aside class="sec1 text-right">
				@yield('aside')
			</aside>


		</div>
	</body>
</html>
