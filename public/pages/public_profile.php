
<?php
include 'C:/xampp/htdocs/hrmodel/public/pages/onclick-dummy.php'; 
?>
<div class="container">
    <div class="row">
        <div class="form-horizontal">

        <!----------------------------------------------------------PUBLIC PROFILE---------------------------------------------------------------------------->

			<div role="tabpanel" class="tab-pane active" id="myProfile">
				<h4 class="header bolder blue">Personal info</h4>
				<div class="row" >
					<div  class="col-xs-12 col-sm-5">
					
							<label class="label-profile">
								<img src="http://localhost/hrmodel/pictureService/get.php" height="300" width="300" class="img-circle" >            
			                </label>
						
					</div> <!--end col --> 

					<div class="col-xs-12 col-sm-6 col-sm-offset-1">
						
							<div class="form-group ">
								<label class="col-sm-3 control-label ">First name</label>
									<div class="col-sm-8">
										<input class ="form-control input-medium " class="col-xs-12 col-sm-10" type="text"  id="FirstName" placeholder="First Name" value="<?php echo $red['korisnik']['ime']; ?>" readonly>
				                    </div><!-- end col-->
							</div><!--end form-group-->

			                <div class="form-group ">
			                    <label class="col-sm-3 control-label ">Last name</label>
				                    <div class="col-sm-8">
				                        <input class ="form-control input-medium " class="col-xs-12 col-sm-10" type="text" id="LastName" placeholder="Last Name" value="<?php echo $red['korisnik']['prezime']; ?>" readonly>
				                    </div><!-- end col-->
			                </div><!--end form-group-->

			                <div class="form-group ">
			                    <label class="col-sm-3 control-label ">Username</label>
				                    <div class="col-sm-8">
				                        <input class ="form-control input-medium " class="col-xs-12 col-sm-10" type="text" id="username" placeholder="Username" value="<?php echo $red['korisnik']['korisnicko_ime']; ?>" readonly>
				                    </div><!-- end col-->
			                </div><!--end form-group-->

							<div class="form-group ">
			                    <label class="col-sm-3 control-label ">Phone number</label>
				                    <div class="col-sm-8">
				                        <input class="form-control input-medium"  class="col-xs-12 col-sm-10" type="text" id="PhoneNumber" placeholder="Phone number" value="<?php echo $red['korisnik']['telefon']; ?>" readonly>
				                    </div><!-- end col-->
			                </div><!--end form-group-->

							<div class="form-group ">
			                    <label class="col-sm-3 control-label ">Email</label>
				                    <div class="col-sm-8">
				                        <input class="form-control input-medium" class="col-xs-12 col-sm-10" type="text" id="email" placeholder="Email" value="<?php echo $red['korisnik']['email']; ?>" readonly>
				                    </div><!-- end col-->
			                </div><!--end form-group-->

					</div><!--end col col-xs-12 col-sm-6 col-sm-offset-1-->
				</div><!--end row-->

				<h4 class="header bolder blue">Other information</h4>
			
				<div class="row">
					<div class="col-xs-12 col-sm-6">

		                <div class="form-group ">
		                    <label class="col-sm-3  control-label ">Birth date</label>
			                    <div class="col-sm-8">
			                        <input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="Birth date" value="<?php echo $red['korisnik']['datum_rodjenja']; ?>" readonly>
			                    </div><!-- end col-->
		                </div><!--end form-group-->

		                <div class="form-group ">
		                    <label class="col-sm-3  control-label ">JMBG</label>
			                    <div class="col-sm-8">
			                        <input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="BirthDate" placeholder="JMBG"  value="<?php echo $red['korisnik']['JMBG']; ?>" readonly>
			                    </div><!-- end col-->
		                </div><!--end form-group-->

		                <div class="form-group ">
		                    <label class="col-sm-3 control-label ">College</label>
			                    <div class="col-sm-8">
			                        <input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="college" placeholder="College" value="<?php echo $red['korisnik_fakultet']['naziv']; ?>" readonly>
			                    </div><!-- end col-->
		                </div><!--end form-group-->
						
					</div><!--end col col-xs-12 col-sm-6 -->


					<div class="col-xs-12 col-sm-6">
		                <div class="form-group ">
		                    <label class="col-sm-3 control-label ">Address</label>
			                    <div class="col-sm-8">
			                        <input  class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="address" placeholder="Address" value="<?php echo $red['korisnik']['adresa']; ?>" readonly>
			                    </div><!-- end col-->
		                </div><!--end form-group-->

		                <div class="form-group ">
		                    <label class="col-sm-3 control-label ">City</label>
			                    <div class="col-sm-8">
			                        <input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="city" placeholder="City" value="<?php echo $red['korisnik_grad']['naziv']; ?>" readonly>
			                    </div><!-- end col-->
		                </div><!--end form-group-->

		                <div class="form-group ">
		                    <label class="col-sm-3 control-label ">State</label>
		                    <div class="col-sm-8">
		                        <input class="form-control input-medium" class="col-xs-12 col-sm-12" type="text" id="state" placeholder="State" value="<?php echo $red['korisnik_drzava']['naziv']; ?>" readonly>
		                    </div><!-- end col-->
		                </div><!--end form-group-->

					</div><!--end col col-xs-12 col-sm-6-->
				</div><!--end row-->
				
			</div><!--end tabpanel"-->
        <!----------------------------------------------------------END PUBLIC PROFILE---------------------------------------------------------------------------->
  	
		</div><!--end  form-->
	</div><!--end  row-->
</div><!--end  container-->
