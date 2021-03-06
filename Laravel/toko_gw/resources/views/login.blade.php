<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center" style="margin-top:20px">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <form action="/auth" method="post">
          <h1 class="h3 mb-3 font-weight-normal">
            Login
          </h1>
          @csrf
          <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
          <input type="password" name="password" class="form-control" style="margin-top:10px" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" name="remember" value="remember-me" style="margin-top:10px">
              Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>