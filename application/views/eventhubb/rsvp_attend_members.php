                      
<!-- here showing event hubb rsvp model popup  -->

        <div class="modal-body">
         <div class="post-detail">
                     <button type="button" class="close" data-dismiss="modal">
                      <img src="<?php echo base_url('assets/images/wow-close.png'); ?>">
                     </button>
                    <div class="user-info">
                       
                        <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px; color:#e91e63;">RSVP - Invites List </h4>
                        
                    </div>                              
                    <div class="line-divider"></div>
                      <div class="user-info">
                        <div class="row" style="padding:10px;">          
                          <div class="row">  

                            <?php 
                                  foreach ($event->rsvp as $events) {
                                  
                            ?>            
                            <div class="col-md-3">

                              <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #D0D0D0; padding:10px 15px; border-radius:5px; min-height:170px;">
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
                                  <div style="font-size:13px; font-weight:bold; line-height: 15px;">
                                    <?php if(isset($events->userid->firstname)) { echo $events->userid->firstname." ".$events->userid->lastname;}  ?>
                                  </div>        
                                  <div style="font-size:11px;"><?php if(isset($events->userid->designation)){ echo $events->userid->designation; } ?></div> 
                                  <div style="font-size:12px; color: #e91e63;">
                                    <img src="../assets/images/wow-black-small.png"> 
                                    <?php echo $events->userid->wowtagid;?>
                                  </div>
                                 
                                  <div style="color: #0e8e18; font-weight: bold;"> <?php if(isset($events->extra)) { echo $events->extra; } ?> <i class="glyphicon glyphicon-ok"> </i> </div>   
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