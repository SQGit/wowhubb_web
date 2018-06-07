                      
<!-- here showing event hubb rsvp model popup  -->
 <form  class="engagementformaction" action="<?php echo base_url('event/engagementformaction/'.$event->_id);?>" method="post">  
        <div class="modal-body">
         <div class="post-detail">
                    <button data-dismiss="modal" class="close">×</button>
                    <div class="user-info">
                      <div class="alert alert-success" id="engagementform_success" role="alert" style="display:none;">Successfully Updated!!</div>
                        
                        <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px; color:#e91e63;"><?php if(isset($event->engagementformaction)){ echo $event->engagementformaction; } ?> </h4>
                        
                    </div>                              
                    <div class="line-divider"></div>
                      <div class="user-info">
                      
                        <div class="row" style="padding:10px;"> 

                            <?php 
                            if(isset($event->audienceengagementform->fullname) && ($event->audienceengagementform->fullname != 'null') )
                              {

                               echo "<div class='form-group col-sm-12' >";
                               echo "<label>Full Name</label>";
                               echo "<input type='text' name='fullname'  class='form-control' value=".$this->session->userdata('first_name').' '.$this->session->userdata('last_name')." >";
                               echo "</div>";
                              }

                            if(isset($event->audienceengagementform->wowtagid) && ($event->audienceengagementform->wowtagid != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Wowtag ID</label>";
                                echo "<input type='text' name='wowtagid' class='form-control' value=".$this->session->userdata('wowtag').">";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->email) && ($event->audienceengagementform->email != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Email</label>";
                                echo "<input type='email' name='email' class='form-control' value=".$this->session->userdata('email').">";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->phone) && ($event->audienceengagementform->phone != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Phone</label>";
                                echo "<input type='text' name='phone' class='form-control' value=".$this->session->userdata('phone')." >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->address1) && ($event->audienceengagementform->address1 != 'null') )
                              {
                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Address1</label>";
                                echo "<input type='text' name='address1' class='form-control' >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->address2) && ($event->audienceengagementform->address2 != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Address2</label>";
                                echo "<input type='text' name='address2' class='form-control' >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->city) && ($event->audienceengagementform->city != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>City</label>";
                                echo "<input type='text' name='city' class='form-control' >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->zipcode) && ($event->audienceengagementform->zipcode != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Zipcode</label>";
                                echo "<input type='text' name='zipcode' class='form-control' >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->country) && ($event->audienceengagementform->country != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Country</label>";
                                echo "<input type='text' name='country'  class='form-control' >";
                                echo "</div>";
                              }

                            if(isset($event->audienceengagementform->gender) && ($event->audienceengagementform->gender != 'null') )
                              {

                                echo "<div class='form-group col-sm-12' >";
                                echo "<label>Gender</label>";
                                echo "<input type='text' name='gender' class='form-control' value=".$this->session->userdata('gender')." >";
                                echo "</div>";
                              }

                            ?>       
                                             
                        </div>
                      </div>
                  </div>  
        </div><!--/.modal nody -->
        <div class="modal-footer">
            <div class="action text-center">
                <button type="submit" class="btn cancel btn-primary" style="width:100%; border-radius: 5px;"> <i class="fa fa-paper-plane"></i> Submit </button>
            </div>
        </div>
      </form> 

<script>
 
       
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".engagementformaction", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
        $.ajax({
                url : url,
                context:this,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                      
                      $('#engagementform_success').show();

                      $('#modal_ajax').modal('hide');                      
                                                                           
                    }else 
                     {                    
                        swal("Sorry!", "Something wrong try again !", "error");
                     }
                }

            });
        });
});

</script>