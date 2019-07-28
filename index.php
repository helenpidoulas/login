<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | Dashboard</title>
    <meta name="author" content="name">
    <meta name="description" content="Login to dashboard">
    <meta name="keywords" content="dashboard, login, dashboard">
    <link rel="icon" href="favicon.png" sizes="48x48" type="image/png">
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css">

    <!-- include GA analytics script -->
    <?php
      include ('analytics.php');
    ?>
  </head>
  <body>
    <div class="row">
      <div class="col-sm-8 offset-xs-1 offset-2 mt-4">
        <h1>Dashboard</h1>
        <form class="border mt-4 pt-4 pb-5 bg-light rounded" method="POST" action="dashboard.php">
          <h2 class="offset-4">Login</h2>
          <div class="form mt-4">
            <div class="input-group offset-1">
              <label for="username" class="col-sm-9 col-md-3 col-form-label-lg pt-0">Username: </label>
              <input type="text" name="username" id="username" class="col-sm-9 col-md-6 border rounded col-form-label-lg" placeholder="Username" required>
            </div>
            <div class="input-group offset-1 mt-2">
              <label for="password" class="col-sm-9 col-md-3 col-form-label-lg pt-0">Password: </label>
              <input type="password" name="password" id="password" class="col-sm-9 col-md-6 border rounded col-form-label-lg" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-primary col-6 offset-4 mt-3 mb-2" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>

    <!-- vendor scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <scrpt src="vendor/js/bootstrap.min.js"></script>

    <!-- polyfill for legacy browsers -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
  </body>
</html>
