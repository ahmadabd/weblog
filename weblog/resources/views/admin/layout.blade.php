<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        @font-face{
            font-family:majid;
            src:url('{{asset('/fonts/Iranian Sans.ttf') }}');
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<body>
    @if (!Auth::check())
        <script>window.location='/login'</script>
    @endif

    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="flex-direction: row-reverse;" id="nav1">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: flex-end;">

            <ul class="navbar-nav" style="flex-direction:row-reverse;height:50px;padding:5px">
                <li class="nav-item">
                    <a @if ($page = 'weblog')
                        class="nav-link active"
                        @else
                        class="nav-link"
                    @endif 
                    href="{{ route('adminBlog') }}" style="margin-right:25px;">وبلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:25px;">پادکست</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:25px;">پروژه</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px">ویدیو</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right:25px;">رزومه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" style="margin-right:25px;">خروج</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="div1 container text-right">
        @yield('content')
    </div>

</body>
</html>
