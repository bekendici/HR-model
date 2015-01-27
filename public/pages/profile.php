<?php include 'C:/xampp/htdocs/hrmodel/public/pages/name.php'; ?>
	<div class="container">
		<div class="row">
			<div class="form-horizontal"  role="form">
				
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a data-target="#myProfile" data-toggle="tab">My profile</a></li>
						<li role="presentation"><a data-target="#edit-profile"  data-toggle="tab">Edit my profile</a></li>
						<li role="presentation"><a data-target="#edit-privacy"  data-toggle="tab">Privacy Settings</a></li>
					</ul><!-- end nav nav-tabs-->
				
					<div class="tab-content">
						<script src='index.js'></script>
		<!--------------------------------------------------------------------------------------------------------MY PROFILE------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
		                  
						<div role="tabpanel" class="tab-pane active" id="myProfile">
							<h4 class="header bolder blue">Personal info</h4>
								<div class="row">
								
									<div class="col-xs-12 col-sm-5">
										
											<label class="label-profile">
												<img src="http://localhost/hrmodel/pictureService/get.php" height="300" width="300" class="img-circle" >
											</label>
									
										<div class="form-group required">
											<div class="col-sm-4">
												<input class=" form-control default-cursor input-medium" type="text" id="FirstName" placeholder="First Name" value="<?php echo $red['ime']; ?>" required="required" readonly>
											</div><!--end col-->
											<div class="col-sm-4">
												<input class="form-control default-cursor input-medium" type="text" id="LastName" placeholder="Last Name" value="<?php echo $red['prezime']; ?>" readonly>
											</div><!--end col-->
										</div><!--end form-group-->
									</div><!--end col-->
									
									<div class="col-xs-12 col-sm-7">
										
											<div class="form-group has-feedback has-feedback-left">
												<label for="username "class="col-sm-4 input-label bolder ">Username:</label>
													<div class="col-sm-6 inner-addon left-addon" >
														<i class="glyphicon glyphicon-user form-control-feedback"></i>
														<input class ="form-control default-cursor input-medium "  type="text" id="username" placeholder="Username" value="<?php echo $red['korisnicko_ime']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											<div class="form-group has-feedback has-feedback-left">
												<label for="PhoneNumber "class="col-sm-4 input-label  ">Phone number:</label>
													<div class="col-sm-6 inner-addon left-addon">
														<i class=" glyphicon glyphicon-earphone form-control-feedback"></i>
														<input class="form-control default-cursor input-medium"  class="col-xs-12 col-sm-10" type="text" id="PhoneNumber" placeholder="Phone number" value="<?php echo $red['telefon']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
											
											<div class="form-group has-feedback has-feedback-left ">
												<label for="email "class="col-sm-4 input-label  ">Email:</label>
													<div class="col-sm-6 inner-addon left-addon">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-10" type="text" id="email" placeholder="Email" value="<?php echo $red['email']; ?>" readonly>
														<i class=" glyphicon glyphicon-envelope form-control-feedback"></i>
													</div><!-- end col-->
											</div><!--end form-group-->
									</div><!--end col-->
								</div><!--end row-->
							<hr>
							
							<h4 class="header bolder blue">Other information</h4>
							
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">Birth date:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="Birth date" value="<?php echo $red['datum_rodjenja']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
									
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">JMBG:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="jmbg" placeholder="JMBG" value="<?php echo $red['JMBG']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
							
											<div class="form-group ">
												<label for="college "class="col-sm-3 input-label  ">College:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="college" placeholder="College" value="<?php echo $red4['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
							
							
										<div class="col-xs-12 col-sm-6">
											
											<div class="form-group ">
												<label for="address "class="col-sm-3 input-label  ">Address:</label>
													<div class="col-sm-6">
														<input  class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="address" placeholder="Address" value="<?php echo $red['adresa']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
							
											<div class="form-group ">
												<label for="city "class="col-sm-3 input-label  ">City:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="cityy" placeholder="City" value="<?php echo $red2['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
							
											<div class="form-group ">
												<label for="state "class="col-sm-3 input-label">State:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="statee" placeholder="State" value="<?php echo $red3['naziv']; ?>" readonly>
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
									
											<label class="label-profile">
												<form action="http://localhost/hrmodel/pictureService/insert.php" method="post" enctype="multipart/form-data">
													<input type="file" id="imginp" name="imginp" style="display:none;" >
													<img src="http://localhost/hrmodel/pictureService/get.php" height="300" width="300" class="img-circle" >
													<input type="submit" value="Upload">
												</form>
											</label>
									
										<div class="form-group required">
											<div class="col-sm-4">
												<input class=" form-control default-cursor input-medium" type="text" id="FirstName" placeholder="First Name" required="required" value="<?php echo $red['ime']; ?>" readonly>
											</div><!--end col-->
											<div class="col-sm-4">
												<input class="form-control default-cursor input-medium" type="text" id="LastName" placeholder="Last Name" value="<?php echo $red['prezime']; ?>" readonly>
											</div><!--end col-->
										</div><!--end form-group-->
									</div><!--end col-->
									
									<div class="col-xs-12 col-sm-7">
										
										<div class="form-group has-feedback has-feedback-left">
											<label for="username "class="col-sm-4 input-label bolder ">Username:</label>
												<div class="col-sm-6 inner-addon left-addon" >
													<i class="glyphicon glyphicon-user form-control-feedback"></i>
													<input class ="form-control input-medium "  type="text" id="username" placeholder="Username" value="<?php echo $red['korisnicko_ime']; ?>" >
												</div><!-- end col-->
										</div><!--end form-group-->
											
											
										<div class="form-group has-feedback has-feedback-left">
											<label for="PhoneNumber "class="col-sm-4 input-label  ">Phone number:</label>
												<div class="col-sm-6 inner-addon left-addon">
													<i class=" glyphicon glyphicon-earphone form-control-feedback"></i>
													<input class="form-control input-medium"  class="col-xs-12 col-sm-10" type="text" id="telefon" placeholder="Phone number" value="<?php echo $red['telefon']; ?>">
												</div><!-- end col-->
										</div><!--end form-group-->
											
											
										<div class="form-group has-feedback has-feedback-left ">
											<label for="email "class="col-sm-4 input-label  ">Email:</label>
												<div class="col-sm-6 inner-addon left-addon">
													<input class="form-control input-medium" class="col-xs-12 col-sm-10" type="text" id="email" placeholder="Email" value="<?php echo $red['email']; ?>" >
													<i class=" glyphicon glyphicon-envelope form-control-feedback"></i>
												</div><!-- end col-->
										</div><!--end form-group-->
										
									</div><!--end col-->
								</div><!--end row-->
							<hr>
							
							<h4 class="header bolder blue">Other information</h4>
							
									<div class="row">
										<div class="col-xs-12 col-sm-6">
										
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">Birth date:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="Birth date" value="<?php echo $red['datum_rodjenja']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
									
											<div class="form-group ">
												<label for="BirthDate "class="col-sm-3 input-label  ">JMBG:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="jmbg" placeholder="JMBG" value="<?php echo $red['JMBG']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
							
											<div class="form-group ">
												<label for="college "class="col-sm-3 input-label  ">College:</label>
													<div class="col-sm-6">
														<input class="form-control default-cursor input-medium" class="col-xs-12 col-sm-12" type="text" id="college" placeholder="College" value="<?php echo $red4['naziv']; ?>" readonly>
													</div><!-- end col-->
											</div><!--end form-group-->
											
										</div><!--end col-->
							
							
										<div class="col-xs-12 col-sm-6">
											
											<div class="form-group ">
												<label for="address "class="col-sm-3 input-label  ">Address:</label>
													<div class="col-sm-6">
														<input  class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="adresa" placeholder="Address" value="<?php echo $red['adresa']; ?>">
													</div><!-- end col-->
											</div><!--end form-group-->
											
							
											<div class="form-group ">
												<label for="city "class="col-sm-3 input-label  ">City:</label>
													<div class="col-sm-6">
														<select class="form-control input-medium" class="col-xs-12 col-sm-12" id="city" name="city" placeholder="City" >
															<option><?php echo $red2['naziv']; ?></option>
														</select>
													</div><!-- end col-->
											</div><!--end form-group-->
											
							
											<div class="form-group ">
												<label for="state "class="col-sm-3 input-label">State:</label>
													<div class="col-sm-6">
														<select class="form-control input-medium" class="col-xs-12 col-sm-12" id="state" name="state" placeholder="State" >
															<option><?php echo $red3['naziv']; ?></option>
															<?php include 'upit_drzave.php'; ?>
														</select>
													</div><!-- end col-->
											</div><!--end form-group-->
										</div><!--end col-->
									</div><!--end row-->
									
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
									<div class=" div1 col-sm-6 col-sm-offset-3">
											
											<form id="passChange">
											
												<div class="form-group " >
													<label for="OldPassword "class="col-sm-6 input-label  ">Old Password:</label>
														<div class="col-sm-5">
															<input class="form-control input-medium" class="col-xs-12 col-sm-12" name="old_password" type="password" id="OldPassword">
														</div><!-- end col-->
												</div><!--end form-group-->
												
												
												
												<div class="form-group ">
													<label  for="NewPassword" class="col-sm-6 input-label ">New Password</label>
														<div class="col-sm-5">
															<input class="form-control input-medium" class="col-xs-12 col-sm-12"  name="new_password"type="password" id="NewPassword">
														</div><!-- end col-->
												</div><!--end form-group-->
										
											
									
												<div class="form-group ">
													<label for="ConfirmPassword" class="col-sm-6  input-label ">Confirm Password</label>
														<div class="col-sm-5">
															<input class="form-control input-medium" class="col-xs-12 col-sm-12"  name="re_password" type="password" id="ConfirmPassword">
														</div><!-- end col-->
												</div><!--end form-group-->
												
											
												
												<div class="form-group">
													<center>
														<input type="submit" style="margin-right:20px;" id="cancle-button" class="btn btn-lg btn-info btn-inline " onClick="parent.location='profile.html'" value="Cancel">
														<input type="submit" style="margin-left:20px;" id="save-button" type="submit" class="btn btn-primary btn-lg btn-inline " value="Save changes">
													</center>
												</div><!--end form-group-->
											</form><!--end form-->
										
									</div><!--end col-->
								</div><!--end row-->
							</div><!--end container-->
						</div><!--end PRIVACY SETTINGS-->
						
					</div><!-- end tab-content-->
				
			</div><!-- end form-horizontal-->
		</div><!--end row-->
	</div> <!-- end container -->

	
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

