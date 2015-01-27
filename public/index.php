  <!DOCTYPE html>
  <html ng-app="HRModuleApp">
      <head>
        <meta charset="UTF-8">
        <title>HRModule</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/template.css" rel="stylesheet">

    		<link href="css/index.css" rel="stylesheet">

        
    		<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.css" />



    		
              <script src="js/jquery-2.1.3.min.js"></script>
    
    	</head>
  <?php include "c:/xampp/htdocs/hrmodel/public/pages/name.php"; ?>
  <body ng-controller="mainController">
  <div id="header" class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kolaps">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a id="brand" class="navbar-brand" href="#">HR Module</a>
      </div>
      <div class="collapse navbar-collapse" id="kolaps">
        <ul class="nav navbar-nav pull-right" id="upper_menu">
              <li><a href="#home"> Welcome, <?php echo $red['korisnicko_ime']; ?>!</a></li>
              <li><a href="#profile"><i class="glyphicon glyphicon-file"></i> My Profile</a></li>
              <li><a href="#aktivnosti_test"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
              <li><a href="..\\helper/logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </div><!--/.navbar -->

  <div class="row-offcanvas row-offcanvas-left">
    <div id="sidebar" class="sidebar-offcanvas">
        <div class="col-md-11">
          <h3>Main Menu</h3>
          <ul class="nav nav-pills nav-stacked list-group">
            <li><a class="list-group-item" href="#home">Dashboard</a></li>
            <li><a class="list-group-item" href="#activities">Activities</a></li>
            <li><a class="list-group-item" href="#employees_datatable">Employees</a></li>
            <li><a class="list-group-item" href="#add_user">Tests</a></li>
            <li><a class="list-group-item" href="#vacations_datatable">Vacations</a></li>
          </ul>
        </div>
    </div>
  <div id="main">
      <div class="col-md-11">
          <p class="visible-xs">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          <div ng-view></div>
      </div>  <!-- end col-md-12 -->
  </div><!-- end main-->
    
    

  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>




        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
        <script src="js/angular.js"></script>
        <script src="js/angular-route.js"></script>
        <script src="js/holder.js"></script>
        <script type="text/javascript" src="js/template.js" ></script>
        <script src="js/bootstrap-timepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/templating_script.js"></script>
        <script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>


  <script>
      $(document).ready(function() {
    $('[data-toggle=offcanvas]').click(function() {
      $('.row-offcanvas').toggleClass('active');
    });
  });
  </script>
  </body>
  </html>