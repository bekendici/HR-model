<html>
<head>
	<title>My profile</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
	<!--<link href="path/to/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/register-form.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
	<link href="css/bootstrapValidator.css" rel="stylesheet" />
	<link href="css/datepicker.css" rel="stylesheet">
	<script src='index.js'></script>
	
</head>
<body>
<?php include "name.php"; ?>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxx NAVBAR TOP FIXED xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="#">HR MODULE</a>
      		  	</div>
			</div> <!-- end navbar-header-->
			<div id="navbar" class="navbar-collapse collapse">
	         	<ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="profile.html">My profile<span class="sr-only">(current)</span></a></li>
		            <li><a href="#">Settings</a></li>
		            <li><a href="..\\helper/logout.php">Log out</a></li>
	          	</ul>
        	</div><!--/.nav-collapse -->
		</div> <!-- end div Container -->
	</nav> <!-- end NAV navbar fixed top -->

	<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx MENU BAR xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

	<div class="row">
		<div class="container">
			<div class="navbar navbar-inverse" role="navigation" id="main_menu_row">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		          </div>
		          <div class="navbar-collapse collapse" style="height: 1px;" id="main_menu">
		            <ul class="nav navbar-nav navbar-right">
		              <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
		              <li><a href="#">Activities</a></li>
		              <li><a href="">Employees</a></li>
		              <li><a href="#">Settings</a></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
			</div>
		</div> <!-- end div container -->
	</div> <!-- end row  div -->

<div class="container">
	<div class="container">
		<div class="row">
			<div class="form-horizontal"  role="form">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#myProfile" data-toggle="tab">My profile</a></li>
						<li role="presentation"><a href="#edit-profile"  data-toggle="tab">Edit my profile</a></li>
						<li role="presentation"><a href="#edit-privacy"  data-toggle="tab">Privacy Settings</a></li>
					</ul><!-- end nav nav-tabs-->
				
					<div class="tab-content">
					
		<!--------------------------------------------------------------------------------------------------------MY PROFILE------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
		
						<div role="tabpanel" class="tab-pane active" id="myProfile">
							<h4 class="header bolder blue">Personal info</h4>
								<div class="row">
									<div class="col-xs-12 col-sm-5">
											
										<div class="space-3"></div>
											<label class="label-profile">
												<img src="..\\pictureService/get.php" height="300" width="300" class="img-circle" >
											</label>
										<div class="space-3"></div>
									
										<div class="form-group required">
											<div class="col-sm-4">
												<input class=" form-control input-medium" type="text" id="FirstName" placeholder="First Name" value="<?php echo $red['ime']; ?>" readonly>
											</div>
											<div class="col-sm-4">
												<input class="form-control input-medium" type="text" id="LastName" placeholder="Last Name" value="<?php echo $red['prezime']; ?>" readonly>
											</div><!--end col-->
										</div><!--end form-group-->
	
									</div>
									
									<div class="col-xs-12 col-sm-7">
											
										<div class="space-4"></div>
											
										<div class="form-group has-feedback has-feedback-left">
											<label for="username "class="col-sm-4 input-label bolder ">Username:</label>
												<div class="col-sm-6 inner-addon left-addon" >
													<i class="glyphicon glyphicon-user form-control-feedback"></i>
													<input class ="form-control input-medium "  type="text" id="username" placeholder="Username" value="<?php echo $red['korisnicko_ime']; ?>" readonly>
												</div><!-- end col-->
										</div><!--end form-group-->
											
										<div class="space-2"></div>
											
										<div class="form-group has-feedback has-feedback-left">
											<label for="PhoneNumber "class="col-sm-4 input-label  ">Phone number:</label>
												<div class="col-sm-6 inner-addon left-addon">
													<i class=" glyphicon glyphicon-earphone form-control-feedback"></i>
													<input class="form-control input-medium"  class="col-xs-12 col-sm-10" type="text" id="PhoneNumber" placeholder="Phone number" value="<?php echo $red['telefon']; ?>" readonly>
												</div><!-- end col-->
										</div><!--end form-group-->
											
										<div class="space-2"></div>
											
										<div class="form-group has-feedback has-feedback-left ">
											<label for="email "class="col-sm-4 input-label  ">Email:</label>
												<div class="col-sm-6 inner-addon left-addon">
													<input class="form-control input-medium" class="col-xs-12 col-sm-10" type="text" id="email" placeholder="Email" value="<?php echo $red['email']; ?>" readonly>
													<i class=" glyphicon glyphicon-envelope form-control-feedback"></i>
												</div><!-- end col-->
										</div><!--end form-group-->
									</div><!--end col-->
								</div><!--end row-->
							<hr>
							
							<h4 class="header bolder blue">Other information</h4>
								<div class="space-2"></div>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
										
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">Birth date:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="Birth date" value="<?php echo $red['datum_rodjenja']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
									
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">JMBG:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="jmbg" placeholder="JMBG" value="<?php echo $red['JMBG']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="college "class="col-sm-3 input-label  ">College:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="college" placeholder="College" value="<?php echo $red4['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
							
										<div class="col-xs-12 col-sm-6">
										
											<div class="space-2"></div>
											
											<div class="form-group ">
												<label for="address "class="col-sm-3 input-label  ">Address:</label>
													<div class="col-sm-6">
														<input  class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="address" placeholder="Address" value="<?php echo $red['adresa']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="city "class="col-sm-3 input-label  ">City:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="cityy" placeholder="City" value="<?php echo $red2['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="state "class="col-sm-3 input-label">State:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="statee" placeholder="State" value="<?php echo $red3['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
									</div><!--end row-->
						</div><!-- end tabpanel-->
						
		<!----------------------------------------------------------------------------- EDIT MY PROFILE---------------------------------------------------------------------------------------------------------------------------------------------------------->
						
						<div role="tabpanel" class="tab-pane " id="edit-profile">
							<h4 class="header bolder blue">Personal info</h4>
								<div class="row">
									<div class="col-xs-12 col-sm-5">
									
										<div class="space-3"></div>
										
											<label class="label-profile">
												<form action="..\\pictureService/insert.php" method="post" enctype="multipart/form-data">
													<input type="file" id="imginp" name="imginp"  style="display:none;" >
													<img src="..\\pictureService/get.php" height="300" width="300" class="img-circle" >
													<input type="submit" value="Upload">
												</form>
											</label>
											
										<div class="space-3"></div>
									
										<div class="form-group required">
											<div class="col-sm-4">
												<input class=" form-control input-medium" type="text" id="FirstName" placeholder="First Name" value="<?php echo $red['ime']; ?>" readonly>
											</div><!--end col-->
											<div class="col-sm-4">
												<input class="form-control input-medium" type="text" id="LastName" placeholder="Last Name" value="<?php echo $red['prezime']; ?>" readonly>
											</div><!--end col-->
										</div><!--end form-group-->
									</div><!--end col-->
									
									<div class="col-xs-12 col-sm-7">
											
											<div class="space-4"></div>
											
											<div class="form-group has-feedback has-feedback-left">
												<label for="username "class="col-sm-4 input-label bolder ">Username:</label>
													<div class="col-sm-6 inner-addon left-addon" >
														<i class="glyphicon glyphicon-user form-control-feedback"></i>
														<input class ="form-control input-medium "  type="text" id="username" placeholder="Username" value="<?php echo $red['korisnicko_ime']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
											
											<div class="form-group has-feedback has-feedback-left">
												<label for="PhoneNumber "class="col-sm-4 input-label  ">Phone number:</label>
													<div class="col-sm-6 inner-addon left-addon">
														<i class=" glyphicon glyphicon-earphone form-control-feedback"></i>
														<input class="form-control input-medium"  class="col-xs-12 col-sm-10" type="text" id="telefon" placeholder="Phone number" value="<?php echo $red['telefon']; ?>">
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
											
											<div class="form-group has-feedback has-feedback-left ">
												<label for="email "class="col-sm-4 input-label  ">Email:</label>
													<div class="col-sm-6 inner-addon left-addon">
														<input class="form-control input-medium" class="col-xs-12 col-sm-10" type="text" id="email" placeholder="Email" value="<?php echo $red['email']; ?>" readonly>
														<i class=" glyphicon glyphicon-envelope form-control-feedback"></i>
													</div><!-- end col-->
											</div><!--end form-group-->
									</div><!--end col-->
								</div><!--end row-->
							<hr>
							
							<h4 class="header bolder blue">Other information</h4>
								<div class="space-2"></div>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">Birth date:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="Birth date" value="<?php echo $red['datum_rodjenja']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
									
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">JMBG:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="jmbg" placeholder="JMBG" value="<?php echo $red['JMBG']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="college "class="col-sm-3 input-label  ">College:</label>
													<div class="col-sm-6">
														<input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="college" placeholder="College" value="<?php echo $red4['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
							
							
										<div class="col-xs-12 col-sm-6">
										
											<div class="space-2"></div>
											
											<div class="form-group ">
												<label for="address "class="col-sm-3 input-label  ">Address:</label>
													<div class="col-sm-6">
														<input  class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="adresa" placeholder="Address" value="<?php echo $red['adresa']; ?>">
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="city "class="col-sm-3 input-label  ">City:</label>
													<div class="col-sm-6">
														<select class="form-control input-medium" class="col-xs-12 col-sm-12" id="city" name="city" placeholder="City" >
															<option><?php echo $red2['naziv']; ?></option>
														</select>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="space-2"></div>
							
											<div class="form-group ">
												<label for="state "class="col-sm-3 input-label">State:</label>
													<div class="col-sm-6">
														<select class="form-control input-medium" class="col-xs-12 col-sm-12" id="state" name="state" placeholder="State" >
															<option><?php echo $red3['naziv']; ?></option>
															<?php include '..\\helper/upit_drzave.php'; ?>
														</select>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
									</div><!--end row-->
								
							<div class="space-2 space-1"></div>
								<div class="row">
									<div class="form-group">
										<center>
											<input type="button" style="margin-right:20px;" id="cancle-button" class="btn btn-lg btn-info btn-inline " onClick="parent.location='profile.html'" value="Cancel">
											<input type="button" style="margin-left:20px;" id="save-button" type="submit" class="btn btn-primary btn-lg btn-inline " value="Save">
										</center>
									</div><!--end form-group-->
								</div><!-- end row -->
						</div><!--END edit my profile--->
						
						
						
						
			<!-----------------------------------------------------------PRIVACY SETTINGS----------------------------------------------------------------------------------------->
						
						<div role="tabpanel" class="tab-pane " id="edit-privacy">
							<div class="container ">
								<div class ="row">
									<div class="col sm-5 col-sm-offset-4">
									
										<div class="space-2"></div>
										
										<div class="div1 col-lg-7 col-sm-10 col-xs-12 col-md-10">
												<form id="passChange">
													<div class="form-group " >
														<label for="OldPassword "class="col-sm-6 input-label  ">Old Password:</label>
															<div class="col-sm-5">
																<input class="form-control input-medium" class="col-xs-12 col-sm-12" name="old_password" type="password" id="OldPassword">
															</div><!-- end col-->
													</div><!--end form-group-->
													
													<div class="space-2"></div>
												
													<div class="form-group ">
														<label  for="NewPassword" class="col-sm-6 input-label ">New Password</label>
															<div class="col-sm-5">
																<input class="form-control input-medium" class="col-xs-12 col-sm-12"  type="password" id="NewPassword">
															</div><!-- end col-->
													</div><!--end form-group-->
										
													<div class="space-2"></div>
							
													<div class="form-group ">
														<label for="ConfirmPassword" class="col-sm-6  input-label ">Confirm Password</label>
															<div class="col-sm-5">
																<input class="form-control input-medium" class="col-xs-12 col-sm-12"  type="password" id="ConfirmPassword">
															</div><!-- end col-->
													</div><!--end form-group-->
													
													<div class="space-3"></div>
													
													<div class="form-group">
														<center>
															<input type="submit" style="margin-right:20px;" id="cancle-button" class="btn btn-lg btn-info btn-inline " onClick="parent.location='profile.html'" value="Cancel">
															<input type="submit" style="margin-left:20px;" id = "save" name = "save" type="submit" class="btn btn-primary btn-lg btn-inline " value="Save changes">
														</center>
													</div><!--end form-group-->
												</form><!--end form-->
										</div><!--end div1-->
									</div><!--end col-->
								</div><!--end row-->
							</div><!--end container-->
						</div><!--end PRIVACY SETTINGS-->
						
					</div><!-- end tab-content-->
				
			</div><!-- end form-horizontal-->
		</div><!--end row-->
	</div> <!-- end container -->
</div><!--end container-->
	
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js" ></script>
<script type="text/javascript" src="js/profile.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--<script src="path/to/bootstrap-editable/js/bootstrap-editable.min.js"></script>-->
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js" ></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/bootbox.js"></script>
<!--<script type="text/javascript" src="js/register-form.js"></script>-->
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/profile.js" ></script>
<script>
$('#date_of_birth').datepicker({
	format: 'mm/dd/yyyy'
});

</script>
<script>

$(document).ready(function (){ 

   $('#save-button').click(function(){
        
			$.ajax({
				type: 'post',
				url: '..\\usersService/service_update.php',
				data: { telefon: $("#telefon").val(),
						grad: $("#city").val(),
						adresa: $("#adresa").val()
						},
				success: function (response) {
						console.log("successfully updated");
						},
				error:function (xhr, ajaxOptions, thrownError){
    			//On error, we alert user
    			console.log(thrownError);
						}
					});
				
		});
});


$(document).ready(function (){ 

   $('#save').click(function(){
        
			$.ajax({
				type: 'post',
				url: '..\\usersService/service_update_pass.php',
				data: { stara_lozinka: $("#OldPassword").val(),
						nova_lozinka: $("#NewPassword").val()
						},
				success: function (response) {
						alert ("successfully password changed");
						},
				error:function (xhr, ajaxOptions, thrownError){
    			//On error, we alert user
    			alert(thrownError);
						}
					});
				
		});
});

$(document).ready(function (){ 

   $('#logout').click(function(){
		$.ajax({
			url: '..\\helper/logout.php'
			});
		});
	});


</script>


</body>
</html>