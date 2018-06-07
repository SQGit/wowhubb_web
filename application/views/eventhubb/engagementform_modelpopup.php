

    <style type="text/css">
     .tooltip{
    width:350px;
    padding:3px 8px;
    color:#FFF;
    text-align:center;
    background: #5CB85C; 
    -webkit-border-radius:5px;
    -moz-border-radius:5px;
    border-radius:5px;
    border: 1px solid #314A5B;
}
.tooltip-inner {
  max-width: 350px;
  width: 350px;
}
    </style>                  
<!-- here showing event hubb audience engagement submission model popup  -->

        <div class="modal-body">
         <div class="post-detail">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="user-info">
                        <h3> Invites List</h3>
                        
                    </div>                              
                    <div class="line-divider"></div>
                      <div class="user-info">
                        <div class="row" style="padding:10px;">          
                          <div class="row">  

                            <?php 
                                  foreach ($event->audienceengagementsubmission as $events) {
                                  
                            ?>            
                            <div class="col-md-4">

                              <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #D0D0D0; padding:10px 15px; border-radius:5px; height:200px; margin-bottom: 10px;" >
                                  <div class="col-md-12 text-center">

                                    <?php 
                                      if(isset($events->userid->personalimage))
                                      {
                                    ?>

                                    <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $events->userid->personalimage; ?>" class="profile-photo" alt="user" />
                                   <?php }  else { ?>
                                    <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
                                    <?php } ?>

                                  </div>
                                  <div style="font-size:15px; font-weight:bold; line-height: 15px;">
                                    <?php if(isset($events->fullname)) { echo $events->fullname;}  ?>
                                  </div>        
                                  <div style="font-size:11px;"><?php if(isset($events->userid->designation)){ echo $events->userid->designation; } ?></div> 
                                  <div style="font-size:12px; color: #e91e63;">
                                    <img src="../assets/images/wow-black-small.png"> 
                                    <?php echo $events->userid->wowtagid;?>
                                  </div>
                                 
                                  <div style="color: #0e8e18; font-weight: bold;"> <a  href="#" data-toggle="tooltip" title="test">Attending </a>
                                    <i class="glyphicon glyphicon-ok"> </i>
                                  </div>   
                                
                                  <span class="form-body-classic">
                                    <!-- <a class="btn" href="#show_info" style="cursor: pointer;"  data-toggle="modal">
                                    </a> -->
                                  <a  href="#" data-toggle="tooltip" title="<?php 
                                      if(isset($events->email) && ($events->email != null) && ($events->email != " ") )
                                      {
                                        echo "Email: ".$events->email."\n";                                    
                                      }
                                      if(isset($events->phone) && ($events->phone != null) && ($events->phone != " "))
                                      {
                                        echo "Phone No: ".$events->phone."\n";
                                      }
                                      if(isset($events->address1) && ($events->address1 != null) && ($events->address1 != " "))  
                                      {
                                        echo "Address1: ".$events->address1."\n";
                                      }
                                      if(isset($events->address2) && ($events->address2 != null) && ($events->address2 != " "))
                                      {
                                        echo "Address2: ".$events->address2."\n";
                                      }
                                      if(isset($events->city) && ($events->city != null) && ($events->city != " ") )
                                      {
                                        echo "City: ".$events->city."\n";
                                      }
                                      if(isset($events->country) && ($events->country != null) && ($events->country != " ") )
                                      {
                                        echo "Country: ".$events->country."\n";
                                      }
                                      if(isset($events->zipcode) && ($events->zipcode != null) && ($events->zipcode != " "))
                                      {
                                        echo "Zipcode: ".$events->zipcode."\n";
                                      }
                                    ?>" >

                                    <i class="glyphicon glyphicon-eye-open"></i>  Registration Info
                                    
                                    </a>
                                  
                                  </span>                                 

                              </div>

                            </div> 

                            <?php }   ?> 

                          </div>                     
                        </div>
                      </div>
                  </div>  
        </div><!--/.modal nody -->
        <div class="modal-footer">
        </div>


        <div class="modal fade modal-child" id="show_info" role="dialog" aria-hidden="true" data-modal-parent="#modal_ajax" style="z-index:99999; margin: 0 auto; width:60%;overflow: hidden;height: 100%; " >
          <div class="modal-dialog modal-sm" style="margin-top:30px; width: 100%;">            
              <div class="modal-content" >
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title" style="text-align:center;">Register Information  </h4>
                </div>
                 <div class="modal-body">

                  <?php

                    if(isset($events->email))
                    {
                      echo " <i class='glyphicon glyphicon-envelope'> </i> <strong>Email:</strong>".$events->email."<br>";
                    }

                    if(isset($events->phone))
                    {
                      echo "<i class='glyphicon glyphicon-earphone'> </i> <strong> Phone No: </strong>".$events->phone."<br>";
                    }

                    if(isset($events->address1))
                    {
                      echo "<i class='glyphicon glyphicon-map-marker'> </i> <strong> Address1: </strong>".$events->address1."<br>";
                    }

                    if(isset($events->address2))
                    {
                      echo "<i class='glyphicon glyphicon-map-marker'> </i> <strong> Address2: </strong>".$events->address2."<br>";
                    }

                    if(isset($events->city))
                    {
                      echo "<i class='glyphicon glyphicon-globe'> </i> <strong> City: </strong>".$events->city."<br>";
                    }
                    
                    if(isset($events->country))
                    {
                      echo "<i class='glyphicon glyphicon-globe'> </i> <strong> Country: </strong>".$events->country."<br>";
                    }


                    if(isset($events->zipcode))
                    {
                      echo "<i class='glyphicon glyphicon-asterisk'> </i> <strong> Zipcode: </strong>".$events->zipcode."<br>";
                    }
                    
                  ?>

                </div>  
              </div>
          </div>
        </div>


<script>

</script>
