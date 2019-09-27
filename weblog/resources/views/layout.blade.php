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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
			<title>@yield('title')</title>
		</head>
	<body>


<div class="container-fluid">
 <nav class="navbar navbar-expand-md bg-info navbar-dark" style="flex-direction: row-reverse;position:fixed;width:100%;overflow:hidden;border:2px solid cyan" id="nav1"> 
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: flex-end;">
		
            <ul class="navbar-nav" style="flex-direction:row-reverse;height:50px;padding:5px">
				 <li class="nav-item">
                    <a class="navbar-brand" href="#" style="margin-right:15px;">صفحه اول</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:15px;">تماس و درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:15px;">پروژه ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:15px;">ویدیوها</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:15px">پادکست ها</a>
                </li>    
            </ul>
        </div>  
   
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<form class="form-inline mr-auto">
		<input class="form-control text-right" type="text" placeholder="?  ?  ?" aria-label="Search">
		<button class="btn btn-info-color btn-rounded btn-md my-0 ml-sm-2 btn-primary" type="submit">جستجو</button>
		</form>
		</div>
	</nav>
			<br/>
			<br>
			<br>
	<div class="container-fluid">
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
