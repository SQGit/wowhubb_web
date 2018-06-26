<?php
if(isset($_POST['submit']))
	{		
		$test  = $_POST['check1'];
		$url  =   $_POST['url_ticketurl1'];
		$country   = $_POST['url_country1'];
		
		// print_r($_POST['ticket_url_check1']) ;


	}


?>


<form action="#" method="POST">

<div id="first_ticket_url">
	                     			<div class="col-md-12" style="margin-top:15px;" id="dynamicticket_1">
			                      		<div class="pull-left" style="width:5%;">
			                       			 <input type="checkbox" name="check1" value="check_test">
			                      		</div>

			                     	 	<div style="width:40%;" class="pull-left text-left">
			                       		 	 <input type='text' name="url_ticketurl1"  class="form-control textBox" placeholder="Ticket URLs">
			                      		</div>

			                      		<div style="width:50%;" class="pull-right text-left">
						                      <select name="url_country1" id="days" class="form-control" style="background-color:#eff0f1;">
							                        <option value="">Country</option>
							                        <option value="Afghanistan">Afghanistan</option>
							                        <option value="Albania">Albania</option>
							                        <option value="Algeria">Algeria</option>
							                        <option value="American">American Somoa</option>
							                        <option value="Angola">Angola</option>
							                        <option value="Antartica">Antartica</option>
							                        <option value="india">india</option>
						                      </select>
			                      		</div>
	                    			</div>
	                    			<!-- <div class="col-md-12" style="margin-top:15px;" id="dynamicticket_1">
			                      		<div class="pull-left" style="width:5%;">
			                       			 <input type="checkbox" name="ticket_url_check2" value="check_test" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      		</div>

			                     	 	<div style="width:40%;" class="pull-left text-left">
			                       		 	 <input type='text' name="url_ticketurl2"  class="form-control textBox" placeholder="Ticket URLs">
			                      		</div>

			                      		<div style="width:50%;" class="pull-right text-left">
						                      <select name="url_country2" id="days" class="form-control" style="background-color:#eff0f1;">
							                        <option value="">Country</option>
							                        <option value="Afghanistan">Afghanistan</option>
							                        <option value="Albania">Albania</option>
							                        <option value="Algeria">Algeria</option>
							                        <option value="American">American Somoa</option>
							                        <option value="Angola">Angola</option>
							                        <option value="Antartica">Antartica</option>
							                        <option value="india">india</option>
						                      </select>
			                      		</div>
	                    			</div> -->
	                    			<!-- <div class="col-md-12" style="margin-top:15px;" id="dynamicticket_1">
			                      		<div class="pull-left" style="width:5%;">
			                       			 <input type="checkbox" name="ticket_url_check3" value="check_test" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      		</div>

			                     	 	<div style="width:40%;" class="pull-left text-left">
			                       		 	 <input type='text' name="url_ticketurl3"  class="form-control textBox" placeholder="Ticket URLs">
			                      		</div>

			                      		<div style="width:50%;" class="pull-right text-left">
						                      <select name="url_country3" id="days" class="form-control" style="background-color:#eff0f1;">
							                        <option value="">Country</option>
							                        <option value="Afghanistan">Afghanistan</option>
							                        <option value="Albania">Albania</option>
							                        <option value="Algeria">Algeria</option>
							                        <option value="American">American Somoa</option>
							                        <option value="Angola">Angola</option>
							                        <option value="Antartica">Antartica</option>
							                        <option value="india">india</option>
						                      </select>
			                      		</div>
	                    			</div>
 -->
                     			</div>
                     		<input type="submit" name="submit" value="upload">

                     		</form>