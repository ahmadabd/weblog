<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"> 
        <h2>Login page</h2>
        <div class="row">
            <div class="col">

                @if (Auth::check())
                    <script>window.location="/admin/weblog"</script>
                @endif

                @if ($message = Session::get('errorMsg'))
                    <p style="color:red">{{ $message }}</p>
                @endif
                <form class="form" action="/admin/login" method="POST">
                    @csrf
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" style="margin-bottom: 10px">
                    @error('email')
                        <p style="color:red">{{ $message }}<p>
                    @enderror

                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" style="margin-bottom: 10px">
                    @error('password')
                        <p style="color:red">{{ $message }}<p>
                    @enderror
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>