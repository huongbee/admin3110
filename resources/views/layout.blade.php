
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="source/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="source/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="source/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="source/css/owl.carousel.css" type="text/css">

    <link href="source/css/style-responsive.css" rel="stylesheet" />
    <link href="source/css/login-form.css" rel="stylesheet">

</head>

  <body>
    <div class="container">

        @yield('content')

    </div><!-- /container -->
    
    <script src="source/js/jquery.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    
  </body>

</html>
