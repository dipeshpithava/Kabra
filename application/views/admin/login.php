<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Color Admin | Login Page</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?php echo base_url()?>/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
  <link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
  <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
  <link href="../assets/css/default/style.min.css" rel="stylesheet" />
  <link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
  <link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="../assets/plugins/pace/pace.min.js"></script>
  <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login bg-black animated fadeInDown">
      <!-- begin brand -->
      <div class="login-header">
        <div class="brand">
          <span class="logo"></span> <b>Color</b> Admin
          <small>responsive bootstrap 3 admin template</small>
        </div>
        <div class="icon">
          <i class="fa fa-lock"></i>
        </div>
      </div>
      <!-- end brand -->
      <!-- begin login-content -->
      <div class="login-content">
        <form action="https://localhost/kabra/auth/login" method="post" class="margin-bottom-0">
          <div class="form-group m-b-20">
            <input type="text" class="form-control form-control-lg inverse-mode" name="identity" placeholder="Email Address" required />
          </div>
          <div class="form-group m-b-20">
            <input type="password" class="form-control form-control-lg inverse-mode" name="password" placeholder="Password" required />
          </div>
          <div class="checkbox checkbox-css m-b-20">
            <input type="checkbox" id="remember_checkbox" name="remember" value=1/> 
            <label for="remember_checkbox">
            Remember Me
            </label>
          </div>
          <div class="login-buttons">
            <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
          </div>
        </form>
      </div>
      <!-- end login-content -->
    </div>
    <!-- end login -->
  </div>
  <!-- end page container -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
  <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../assets/crossbrowserjs/html5shiv.js"></script>
    <script src="../assets/crossbrowserjs/respond.min.js"></script>
    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
  <script src="../assets/js/theme/default.min.js"></script>
  <script src="../assets/js/apps.min.js"></script>
  <!-- ================== END BASE JS ================== -->
  
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
