<html>
<head>
	<title>Register page</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/register-form.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
	<link href="css/bootstrapValidator.css" rel="stylesheet" />
	<link href="css/datepicker.css" rel="stylesheet" />

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2"> <!-- main column -->
				<div class="row"><!-- INNER row -->
				<div class="col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1"> <!-- INNER column -->
					<div id="register-wrapper"> <!-- start of REGISTER WRAPPER -->
					<!-- form heading -->
					<h1 class="register-form-heading">Register to <span class="register-form-heading blue"> HR module</span></h1>
					<hr class="register-hr">
					<!-- end form heading -->

					<form role="form" id="registration-form" action="..\\registrationService/service_unos.php" method="POST">

						<div id="step1-container">

						<!-- steps -->
						<h5 class="step-header">STEP 1/3</h5>
						<!-- end of steps -->

							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="firstname" class="input-label">First name</label>
										<input type="text" id="firstname" name="firstname" class="form-control">
									</div><!-- end form-group-->
								</div><!-- end col -->

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="lastname" class="input-label">Last name</label>
										<input type="text" id="lastname" name="lastname" class="form-control">
									</div><!-- end form-group-->
								</div><!-- end col -->
							</div><!-- end row -->

							<div class="form-group">
								<label for="username" class="input-label">Username</label>
								<input type="text" id="username" name="username" class="form-control">
							</div><!-- end form-group-->
						
							<div class="form-group">
								<label for="password" class="input-label">Password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div><!-- end form-group-->

							<div class="form-group">
								<label for="re_password" class="input-label">Retype password</label>
								<input  type="password" id="re_password" name="re_password" class="form-control">
							</div><!-- end form-group-->

							<div class="row">
								<div class="col-sm-4 col-xs-6">
									<div class="form-group">
										<input type="button" id="login-button" class="btn btn-lg btn-info btn-block" onClick="parent.location='login.html'" value="Back to Login">
									</div><!--end form-group-->
								</div><!-- end col -->

								<div class="col-sm-4 col-xs-6 col-sm-offset-4">
									<div class="form-group">
										<input id="next1" type="button" class="btn btn-primary btn-lg btn-block" value="NEXT">
									</div><!--end form-group-->
								</div><!-- end col -->
							</div><!-- end row -->

						</div> <!-- end STEP1-Container div -->

						<div id="step2-container">

						<!-- steps -->
						<h5 class="step-header">STEP 2/3</h5>
						<!-- end of steps -->

							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="date_of_birth" class="input-label">Date of birth</label>
										<input  type="text" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="DD/MM/YYYY">
									</div><!-- end form-group-->
								</div><!-- end col -->

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="jmbg" class="input-label">JMBG</label>
										<input  type="text" id="jmbg" name="jmbg" class="form-control">
									</div><!-- end form-group-->
								</div><!-- end col -->
							</div><!-- end row -->

							<div class="form-group">
								<label for="email" class="input-label">E-mail</label>
								<input  type="text" name="email" id="email" class="form-control">
							</div><!-- end form-group-->

							<div class="form-group">
								<label for="re_email" class="input-label">Retype e-mail</label>
								<input  type="text" name="re_email" id="re_email" class="form-control">
							</div><!-- end form-group-->

							<div class="form-group">
								<label for="college" class="input-label">College</label>
								<input  type="text" name="college" class="form-control">
							</div><!-- end form-group-->

							<div class="row">
								<div class="col-sm-4 col-xs-6">
									<div class="form-group">
										<input id="previous1" type="button" class="btn btn-default btn-lg btn-block" value="PREVIOUS">
									</div><!--end form-group-->
								</div><!-- end col -->

								<div class="col-sm-4 col-xs-6 col-sm-offset-4">
									<div class="form-group">
										<input id="next2" type="button" class="btn btn-primary btn-lg btn-block" value="NEXT">
									</div><!--end form-group-->	
								</div><!-- end col -->
							</div><!-- end row -->

						</div> <!-- end STEP2-Container div -->

						<div id="step3-container">

						<!-- steps -->
						<h5 class="step-header">STEP 3/3</h5>
						<!-- end of steps -->

							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="city" class="input-label">City</label>
										<select name="city" class="form-control" id="city">
										<!-- THIS WILL BE AUTOMATICALLY FILLED FROM DATABASE -->
											
										</select>
									</div><!-- end form-group-->
								</div><!-- end col -->

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="state" class="input-label">State</label>
										<select name="state" class="form-control" id="state">
											<!-- THIS WILL BE AUTOMATICALLY FILLED FROM DATABASE -->

											<!--<option disabled selected>-- Select a state --</option>-->
											<?php include '..\\helper/upit_drzave.php'; ?>
									<!-- <option>opt 1</option> -->	
										</select>
									</div><!-- end form-group-->
								</div><!-- end col -->
							</div><!-- end row -->

							<div class="form-group">
								<label for="address" class="input-label">Address</label>
								<input  type="text" name="address" class="form-control">
							</div><!-- end form-group-->

							<div class="form-group">
								<label for="phone_number" class="input-label">Phone number</label>
								<input  type="text" name="phone_number" class="form-control">
							</div><!-- end form-group-->

	<!--	<hr class="register-hr"> -->

							<div class="form-group">
								<input type="checkbox"  id="register-checkbox" name="register_checkbox">
								<label for="register-checkbox"  id="checkbox-label">
									I confirm entered data is correct and valid
								</label>
							</div><!-- end form-group-->
							
							<div class="row">
								<div class="col-sm-4 col-xs-6">
									<div class="form-group">
										<input type="button" id="previous2" class="btn btn-default btn-lg btn-block" value="PREVIOUS">
									</div><!--end form-group-->
								</div><!-- end col -->

								<div class="col-sm-4 col-xs-6 col-sm-offset-4">
									<div class="form-group">
										<input type="submit" id="register-button" class="btn btn-lg btn-success btn-block" value="REGISTER">
									</div><!--end form-group-->
								</div><!-- end col -->
							</div><!-- end row -->

						</div> <!-- end STEP3-Container div -->
					</form><!--end form-->
				</div><!-- end INNER column -->
				</div><!-- end INNER row -->
			</div><!-- end main column -->
			</div><!-- end of REGISTER WRAPPER -->
		</div> <!-- ROW div end -->
	</div> <!-- CONTAINER END -->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js" ></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/register-form.js"></script>
<script src='index.js'></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootbox.min.js"></script>
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#date_of_birth').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            }); 
        </script>
</body>
</html>