<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colors login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
</head>
<body>
    <div class="row col-lg-6 col-lg-offset-3">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember">Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html>