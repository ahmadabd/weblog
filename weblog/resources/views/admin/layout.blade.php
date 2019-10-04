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

    @include('admin.nav')

    <div class="div1 container text-right">
        @yield('content')
    </div>

</body>
</html>
