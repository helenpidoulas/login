<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Members area | Dashboard</title>
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
      <div class="col-sm-7 offset-xs-1 offset-2 mt-4">
        <h1>Members area</h1>

          <?php  //Start the Session
            require('connect.php');
            if (isset($_POST['username']) and isset($_POST['password'])){
              $username = $_POST['username'];
              $password = $_POST['password'];
              $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
              $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
              $count = mysqli_num_rows($result);
              if ($count == 1){
                $_SESSION['username'] = $username;
              } else {
                $fmsg = "Invalid login details.";
              }
            }

            if (isset($_SESSION['username'])){
              $username = $_SESSION['username'];
              echo '<div class="mt-4 pt-4 pb-5">';
              echo '<p class="mb-3">Welcome ' . $username . '.</p>';
              echo '<div class="row mb-6">';
              echo '<section class="col-5 border pt-2 pb-4 bg-light rounded mr-4">';
              echo '<h2 class="h4"><a href="investments.php">Investments</a></h2>';
              echo '<img class="img-fluid mb-2" alt="" src="assets/images/investments.jpg">';
              echo '<p>View a list of your investments.</p>';
              echo '<a href="investments.php" class="btn btn-primary mt-3 mb-6">View investments</a>';
              echo '</section>';
              echo '<section class="col-5 border pt-2 pb-4 bg-light rounded">';
              echo '<h2 class="h4"><a href="investors.php">Accounts</a></h2>';
              echo '<img class="img-fluid mb-2" alt="" src="assets/images/accounts.jpg">';
              echo '<p>View a list of list of your accounts.</p>';
              echo '<a href="investors.php" class="btn btn-primary mt-3 mb-6">View investors</a>';
              echo '</section>';
              echo '</div>';
              echo '<div class="pt-5">';
              echo '<a href="logout.php" class="btn btn-secondary mb-6 mt-6">Logout</a>';
              echo '</div>';
              echo '</div>';
            } else {
          }
        ?>
      </div>
    </div>

    <!-- vendor scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <scrpt src="vendor/js/bootstrap.min.js"></script>

    <!-- polyfill for legacy browsers -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
  </body>
</html>
