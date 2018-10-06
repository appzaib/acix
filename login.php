<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Login</title>
    <link href="app-include/css/bootstrap.css" rel="stylesheet">
    <link href="app-include/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="app-include/css/styles.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
                <label for="username">Enter username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.php">Login</a>
          </form>
          <div class="text-center">
            <br>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <script src="app-include/js/jquery.min.js"></script>
    <script src="app-include/js/bootstrap.bundle.min.js"></script>
    <script src="app-include/js/jquery.easing.min.js"></script>
  </body>
</html>
