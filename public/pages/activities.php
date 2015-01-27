
    <link href="http://localhost/hrmodel//public/assets/css/jquery-ui-1.10.2.custom.min.css" media="screen" rel="stylesheet" type="text/css">
	<script src="http://localhost/hrmodel//public//assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
    <script src="http://localhost/hrmodel//public//dist/filter.js" type="text/javascript"></script>
    <script src="http://localhost/hrmodel//public/assets/amir.js" type="text/javascript"></script>
    <script src="http://localhost/hrmodel//public//assets/js/jquery.tinysort.min.js" type="text/javascript"></script>

	<div class ="container">
		 	<div class="row">
                <div class="form-horizontal"  role="form">
                    <div class="row">
                        <div class="container">
							<div class="btn-group pull-right" >
								<!-- Button trigger modal -->
								<button type="button" class="btn button_color btn-lg" data-toggle="modal" data-target="#myModal" >
								 Create new activities
								 </button>

								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog " >
											<div class="modal-content" >

												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Create new activities</h4>
												</div><!--end modal-header-->

												<div class="modal-body " height="1000">
													<form id="activities-form">

														<div class="form-group ">
															<label for="name "class="col-sm-2 input-label bolder ">Name:</label>
																<div class="col-sm-6 " >
																	<input class ="form-control input-medium "  type="text" id="naziv" name="naziv" placeholder="Name">
																</div><!-- end col-->
														</div><!--end form-group-->

														<div class="form-group ">
															<label for="comment "class="col-sm-2 input-label bolder ">Description:</label>
																<div class="col-sm-6 " >
																	<textarea class ="form-control  " rows="6" id="opis" name="opis"></textarea>
																</div><!-- end col-->
														</div><!--end form-group-->	

														<div class="form-group ">
															<label for="sel "class="col-sm-2 input-label bolder ">Category:</label>
																<div class="col-sm-6 " >
																	<select class ="form-control  " rows="6" id="kategorija" name="kategorija">
																		<option>Sport</option>
																		<option>Culture</option>
																		<option>Education</option>
																	</select>
																</div><!-- end col-->
														</div><!--end form-group-->	

														<div class="form-group ">
															<label for="date_of_activities" class="col-sm-2 input-label bolder">Date:</label>
																<div class="col-sm-6 " >
																	<input  type="text" name="date_of_activities" id="date_of_activities" class="form-control" placeholder="DD/MM/YYYY">
															    </div><!-- end col-->
														</div><!--end form-group-->	

														<div class="form-group input-append bootstrap-timepicker">
															<label for="timepicker1 "class="col-sm-2 input-label bolder">Time:</label>
																<div class="col-sm-6 " >
																	<input id="timepicker1" name="timepicker1" type="text" class="input-small">
																	<span class="add-on"><i class="icon-time"></i></span>
																</div><!-- end col-->
														</div><!--end form-group-->	

													</form>	<!--end form-->
												</div><!--end modal-body-->

												<div class="modal-footer">
												    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary" name="create_activities" id="create_activities" >Save changes</button>
												</div><!--end modal-footer-->
	  	
											</div><!--end modal-content-->
										</div><!--end modal-dialog-->
									</div><!--end modal-fade-->
							</div><!--end btn-group-->
						</div><!--end container-->
                   </div><!--end row-->
		  	</div><!--end form-->
        </div><!--end row-->
    </div><!--end div container-->						
                                 
                                <!--</div><end div tab-contetnt-->
                        <!-- </div><!end tabpanel-->
                                            
                     
    <div class="container">
        <div class="row">
          	<div class="col-lg-12" id="sa_strane">
				<div class="col-lg-2 col-xs-2 col-sm-2">
					<center>   <h3 class="textFont">Search</h3></center>
					<input type="text" id="search_box" class="searchbox" placeholder="Type here...."/>
				</div><!--end col-->
			
				<div class="col-lg-7  col-xs-7 col-sm-7">
					<center>  <h3 class="textFont">Filter by month</h3></center>
					<div id="mjeseci">
						<center>
							<label>
				            	<input class="months" value="12" type="checkbox">
				                <span >Previous month</span>
				            </label>

				            <label>
				                <input class="months" value="01" type="checkbox">
				                <span>Current month</span>
				            </label>
				            
				            <label>
				                <input class="months" value="02" type="checkbox">
				                <span>Coming month</span>
				            </label>
						</center>
					</div><!--end id-mjeseci-->
				</div><!--end col-->
      

				<div class="col-lg-3 col-xs-3 col-sm-3">
					<h3 class="textFont">Filter by category</h3>
			            <ul id="kategorija_filter">
			              <li>
			                <input id="sport" value="Sport" type="checkbox" >
			                <span >Sport</span>
			              </li>
			              <li>
			                <input id="culture" value="Culture" type="checkbox">
			                <span>Culture</span>
			              </li>
			              <li>
			                <input id="education" value="Education" type="checkbox">
			                <span>Education</span>
			              </li>              
			            <ul>
				</div><!--end col-->
			</div><!--end id-sa_strane-->
            
         	<div class="col-lg-12 col-xs-12 col-sm-12 ">
				<div id="lista_aktivnosti"></div>
        	</div><!--end col-->
		</div><!--end row-->
    </div><!--end container-->
 </div>

<div class="clear"></div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/template.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

    <script id="template" type="text/html">

     
        <div class="aktivnost_blok">
			<a title="<%= naziv %>" href="/demo/<%= naziv %>">
				<div class="naslovna_bar"><h4 class="naslov"><%= naziv %></h4></div>
			</a><span class="katg">Kategorija: <%= kategorija %></span>
			
            <div class="tijelo_bloka">
			
	            <div class="tekst"><%= opis %></div>
	          	<div class="datumi">Datum <%= datum %></div>
				
          	</div>
          <div class="clear"></div>
        </div>
    

    </script>
<script type="text/javascript" src="js/bootbox.min.js"></script>   
<script type="text/javascript" src="js/activities.js"></script>

<script>
$(document).ready(function (){
   $('#create_activities').click(function(){

			$.ajax({
				type: 'post',
				url: 'http://localhost/hrmodel/activityService/servis_unos.php',
				data: { naziv: $("#naziv").val(),
						opis: $("#opis").val(),
						kategorija: $("#kategorija").val(),
						datum: $("#date_of_activities").val(),
						vrijeme: $("#timepicker1").val()
						},
				success: function (response) {
						//alert ("Activity created!");
						bootbox.alert("Activity is created! Click OK to continue.", function(){
							$('#myModal').modal('hide');
                            location.reload(true);
						});
						},
				error:function (xhr, ajaxOptions, thrownError){
    			//On error, we alert user
    			alert(thrownError);
						}
					});
				
		});
});
</script>