<?php
	
class Eventhubb extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		 $this->load->library('session'); 
		 $this->load->helper(array('form','url','date'));		 

	}

public function edit_event_hubb()
	{
		$this->load->view('eventhubb/event_hubb');
	}

public function get_future_eventhubb()
	{
				$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array();
			   	$json_data = json_encode($data);  

			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/event/futurehubbfeeds',$json_data,'json');	
			   	$data['eventhubbfeed'] = $result->message;
			   	
			   	$this->get_gruop();	 //here get group name  
			   	$data['group_name'] = $this->get_gruop();		

			   	$this->get_past_eventhubb();	 //here get past event
			   	$data['past_event'] = $this->get_past_eventhubb();		    	

			   	$this->load->view('eventhubb/event_hubb', $data);
	}

// get group name 
public function get_past_eventhubb()
{
				$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array();
			   	$json_data = json_encode($data);  
			   	$past_event = $this->rest->post('http://104.197.80.225:3010/wow/event/pasthubbfeeds',$json_data,'json');
			   
			   	if($past_event->success == true)
			   	  	{	
				   	  $data['past_event'] = $past_event->message;
				   	   return $data['past_event'];  //here variable send to get_eventhubb
			   	   	} 
}

// get group name 
public function get_gruop()
{
				$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array();
			   	$json_data = json_encode($data);  
			   	$group_name = $this->rest->post('http://104.197.80.225:3010/wow/group/fetchgroups',$json_data,'json');
			   
			   	if($group_name->success == true)
			   	  	{	
				   	  $data['group_name'] = $group_name->groups;
				   	   return $data['group_name'];  //here variable send to get_eventhubb
			   	   	} 
}

public function edit_eventdetails()
	{
		$this->load->view('eventhubb/edit_event_details');
	}

public function get_eventdetails() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
          		
		   $this->load->view('eventhubb/edit_event_details', $result);
		   
 	}

public function update_eventdetails()
	{
		
		$response = array();

		$token =  $this->session->userdata('token');	

			 $start_date = $_POST['event_startdate'];
		     $end_date   = $_POST['event_enddate'];		    
		     $s_date = date('Y/m/d', strtotime($start_date)); 
		     $e_date = date('Y/m/d', strtotime($end_date));   	
 			
		   	$header1 = array('token:'			.$token,
		   					'eventid:' 	 	    .$this->input->post('event_id'),
		   					'eventtype:' 	 	.$this->input->post('event_type'),
							'eventcategory:' 	.$this->input->post('event_category'), 
							'eventtypeint:'     ."1",
							'eventname:'     	.$this->input->post('event_name'),
							'eventtimezone:' 	.$this->input->post('time_zone'),
							'eventdayscount:' 	.$this->input->post('eventdayscount'),
							'eventstartdate:'	.$s_date.' '.$this->input->post('event_startime'),
							'eventenddate:'   	.$e_date.' '. $this->input->post('event_endtiming'),
							'eventdescription:' .$this->input->post('event_description')
							);
		   	 
	       	$ch1 = curl_init();
       		      				    	
			    	if(!empty($_FILES['cover_img']['name']))
			       		{
				    	 $cover_page = curl_file_create($_FILES['cover_img']['tmp_name'],$_FILES['cover_img']['type']);
				    	}else
					    	{
					    		$cover_page = ""; 
					    	}
			
	
	    		$wowtag_img = array('coverpage'  => @$cover_page);		    	 				
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/editeventdetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data =json_decode($response1);	       	
		     	curl_close($ch1);
		     	// print_r($data);

		     	if($data->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 
	}

public function get_eventwowtag() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
          			
		   $this->load->view('eventhubb/edit_eventwowtag', $result);
		   // $this->load->view('eventhubb/event_hubb', $result);
 	}

public function update_eventwowtag()
	{
	 		 $response = array();
	 		 $runtime = $_POST['runtime_from'];
		     $totime = $_POST['totime_to'];
		     $runtime_from = date('Y/m/d', strtotime($runtime)); 
		     $totime_to = date('Y/m/d', strtotime($totime));   		   	
		    	
		    	$token2 =  $this->session->userdata('token');
		     	$header2 = array('token:'  .$token2,
		     				'eventid:' 	   .$this->input->post('event_id'),		     				
							'eventtitle:'  .$this->input->post('event_title'), 
							'runtimefrom:' .$runtime_from,
							'runtimeto:'   .$totime_to							
							);
		   	 
	       		$ch2 = curl_init();
       		      				    	
			    	if(!empty($_FILES['wowtag_video']['name']))
			       		{
				    	 $wowtag_video = curl_file_create($_FILES['wowtag_video']['tmp_name'],$_FILES['wowtag_video']['type']);
				    	}else
					    	{
					    		$wowtag_video = ""; 
					    	}
			
	
	    		$wowtag_video = array('wowtagvideo'  => @$wowtag_video );	    	 				
	    	 
	    	  	curl_setopt($ch2, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/eventwowtag');	   
		    	curl_setopt($ch2, CURLOPT_HTTPHEADER,$header2);
		    	curl_setopt($ch2, CURLOPT_POST, true);
		    	curl_setopt($ch2, CURLOPT_POSTFIELDS, $wowtag_video); 	
		        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response2 = curl_exec($ch2); 	 
	    	  	$data =json_decode($response2);
	    	  	curl_close($ch2);

	    	  	if($data->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 
	    	  	
	}

public function get_eventvenue() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
           // print_r($result['event']);			
		   $this->load->view('eventhubb/edit_event_venue', $result);
		   // $this->load->view('eventhubb/event_hubb', $result);
 	}

public function update_eventvenue()
{
				$response = array();
				$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  // event venue location

	   			$venue_count = count($this->input->post('event_venue_name')); 
	   			$event_venue_location = array();

	   			for($i=0; $i<$venue_count; $i++)
	   			{	   				
	   				array_push($event_venue_location, array
	   								(
	   									'eventvenuenumber'      =>  $i+1,
	   			 						'eventvenuename'    	=>  $_POST['event_venue_name'][$i],
	   			 						'eventvenueaddress1'    =>  $_POST['address1'][$i],
	   			 						'eventvenueaddress2'    =>  $_POST['address2'][$i],
	   			 						'eventvenuecity'    	=>  $_POST['venue_city'][$i],
	   			 						'eventvenuezipcode'     =>  $_POST['zipcode'][$i]
	   			 						
	   			 					));	   				 
	   			}

	   			// event FAQ 
	   			$faq_count = count($this->input->post('faq_ques')); 
	   			$event_faq = array();

	   			for($i=0; $i<$faq_count; $i++)
	   			{	   				
	   				array_push($event_faq, array
	   								(
	   									'faqnumber'      =>  $i+1,
	   			 						'faqquestion'    =>  $_POST['faq_ques'][$i],
	   			 						'faqanswer'      =>  $_POST['faq_ans'][$i]
	   			 						
	   			 					));	   				 
	   			}
	   			$evnt_venue = array('eventid'                     => $this->input->post('event_id'),
	   								'eventvenueaddressvisibility' => $this->input->post('eventvenue_addressvisible'),
	   								'eventvenueguestshare'        => $this->input->post('eventvenue_guestshare'),
	   								'onlineevent'                 => $this->input->post('eventvenue_onlineevent'),
	   								'inviteonlyevent'             => $this->input->post('eventvenue_inviteonlyevent'),
			 						'eventfaqs'                   => $event_faq,
			 						'faqquestion1'				  => '1.What is Event Age Requirement?',
			 						'faqanswer1'                  =>  $this->input->post('quesans1'),
			 						'faqquestion2'				  => '2.This is a kids friendly event?',
			 						'faqanswer2'				  => $this->input->post('quesans2'),	
			 						'faqquestion3'				  => '3.What are event parking/Transportantion options to and from event location?',
			 						'faqanswer3'				  => $this->input->post('quesans3'),
			 						'faqquestion4'				  => '4.What are allowed into the event venue?',
			 						'faqanswer4'				  =>  $this->input->post('quesans4'),	
			 						'eventvenue'                  => $event_venue_location
			 					   ); 

	   			 $json_data = json_encode($evnt_venue); 

				 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/venue',$json_data,'json');

				
				
				 if($result->success == true)
					{		 	
						
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
				echo json_encode($response); 	
}

public function get_eventcontact() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;       
          			
		   $this->load->view('eventhubb/edit_eventcontact', $result);
		 
 	}

public function update_eventcontact()
	{
			$response = array();
			$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$event_contact = array(  'eventid' 		       => $this->input->post('event_id'),
	    	  							 'eventcontactname'    => $this->input->post('eventcontactname'),
	    								 'eventcontactphone'   => $this->input->post('eventcontactphone'),
	    								 'eventcontactemail'   => $this->input->post('eventcontactemail'),
	    								 'eventcontactmessage' => $this->input->post('message'),
	    								 'privateevent'        => $this->input->post('private_event'),
	    								 'registerrsvp'        => $this->input->post('reg_rsvp'),
	    								 'otherurl' 		   => $this->input->post('other_url'), 
	    								 'giftregistryurl'     => $this->input->post('gift_url'),
	    								 'donationsurl'        => $this->input->post('donation_url'),
	    								 'eventnolinks'        => $this->input->post('event_no_url')								 
	    								 );		

	    	  	$json_data = json_encode($event_contact); 
				$result = $this->rest->post('http://104.197.80.225:3010/wow/event/contact',$json_data,'json');
				// print_r($result);
				if($result->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 
	}

public function get_eventhighlight() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;           			
		   $this->load->view('eventhubb/edit_eventhighlight', $result);		 
 	}

public function update_eventhighlight()
{
				$response = array();
				$token =  $this->session->userdata('token');
		     	$header = array('token:'                   .$token,
			     				'eventid:' 		           .$this->input->post('event_id'),
								'eventguesttype1:'         .$this->input->post('guest_type1'), 
								'eventspeakername1:'       .$this->input->post('nameofspeaker1'),
								'eventspeakerlink1:'       .$this->input->post('guest_url1'),
								'eventspeakeractivities1:' .$this->input->post('guest_speaker1'),
								'eventguesttype2:'         .$this->input->post('guest_type2'),
								'eventspeakername2:'       .$this->input->post('nameofspeaker2'),
								'eventspeakerlink2:'       .$this->input->post('guest_url2'),
								'eventspeakeractivities2:' .$this->input->post('guest_speaker2')
							
							   );
		   	 
	       		$ch3 = curl_init();
       		      				    	
			    	if(!empty($_FILES['highlight_img1']['name']))
			       		{
				    	 $highlight_img1 = curl_file_create($_FILES['highlight_img1']['tmp_name'],$_FILES['highlight_img1']['type']);
				    	}else
					    	{
					    		$highlight_img1 = curl_file_create($_FILES['exit_img1']['tmp_name'],$_FILES['exit_img1']['type']);
					    	}

					if(!empty($_FILES['highlight_video1']['name']))
			       		{
				    	 $highlight_video1 = curl_file_create($_FILES['highlight_video1']['tmp_name'],$_FILES['highlight_video1']['type']);
				    	}else
					    	{
					    		$highlight_video1 = ""; 
					    	}

					 if(!empty($_FILES['highlight_img2']['name']))
			       		{
				    	 $highlight_img2 = curl_file_create($_FILES['highlight_img2']['tmp_name'],$_FILES['highlight_img2']['type']);
				    	}else
					    	{
					    		$highlight_img2 = ""; 
					    	}

					 if(!empty($_FILES['highlight_video2']['name']))
			       		{
				    	 $highlight_video2 = curl_file_create($_FILES['highlight_video2']['tmp_name'],$_FILES['highlight_video2']['type']);
				    	}else
					    	{
					    		$highlight_video2 = ""; 
					    	}
				
	    		$event_highlight = array('eventhighlights1'       => @$highlight_img1,
	    								 'eventhighlights2'       => @$highlight_img2,
	    								 'eventhighlightsvideo1'  => @$highlight_video1,
	    								 'eventhighlightsvideo2'  => @$highlight_video2 								 
	    								 );		    	 				
	    	 
	    	  	curl_setopt($ch3, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/highlights');	   
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $event_highlight); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$result = curl_exec($ch3); 	 
	    	  	$data =json_decode($result);
	    	  	curl_close($ch3);

	    	  	// print_r($data);

	    	  	if($data->success == true)
					{	
						$response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 	
}

// delete personal  event from db
public function delete_event()
	{
		$response = array();
		$this->rest->http_header('token',  $this->session->userdata('token'));
		$delete_event = array('eventid' =>$this->input->post('event_id'));
		$json_data = json_encode($delete_event); 

				$result = $this->rest->post('http://104.197.80.225:3010/wow/event/deleteevent',$json_data,'json');

				// print_r($result);
				
				if($result->success == true)
					{		 	
						// echo "delete";
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 	
	}

// view rsvp attend members
public function rsvp_members($_id)
	{
		$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array('eventid' =>$_id );
			   	$json_data = json_encode($data);  
			   	$rsvp_name = $this->rest->post('http://104.197.80.225:3010/wow/event/fetchparticularevent',$json_data,'json');
			   	$data['event'] = $rsvp_name->event;			   
			   	
		$this->load->view('eventhubb/rsvp_attend_members',$data);
	}

// view rsvp attend members
public function engagementform_members($_id)
	{
		$this->rest->http_header('token',  $this->session->userdata('token'));

		 	$data = array('eventid' =>$_id );
			$json_data = json_encode($data);  
			$engagementform_name = $this->rest->post('http://104.197.80.225:3010/wow/event/fetchparticularevent',$json_data,'json');
			$data['event'] = $engagementform_name->event;			   
			   
		$this->load->view('eventhubb/engagementform_modelpopup',$data);
	}


// Edit professional event details
public function pro_edit_eventdetails($_id)
	{
		$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array('eventid' =>$_id );
			   	$json_data = json_encode($data);  
			   	$group_name = $this->rest->post('http://104.197.80.225:3010/wow/event/fetchparticularevent',$json_data,'json');
			   	$data['event'] = $group_name->event;			   
			   	
		$this->load->view('eventhubb/pro_editeventdetails',$data);
	}

public function update_professional_eventdetails()
	{
		
		$response = array();

		$token =  $this->session->userdata('token');	

			 $start_date = $this->input->post('event_startdate');
		     $end_date   = $this->input->post('event_enddate');		    
		     $s_date = date('Y/m/d', strtotime($start_date)); 
		     $e_date = date('Y/m/d', strtotime($end_date));   	
 			
		   $header1 = array('token:'            .$token,
		   					'eventtype:'        .'professional_event', 
		   					'eventid'           . $this->input->post('event_id'),	
							'eventcategory:'    .$this->input->post('event_category'), 
							'eventtypeint:'     ."2",
							'eventname:'        .$this->input->post('event_name'),	
							'tickettype:'       .$this->input->post('ticket_type'),	
							'eventstartdate:'	.$s_date.' '.$this->input->post('event_startime'),
							'eventenddate:'   	.$e_date.' '.$this->input->post('event_endtiming'),
							'ticketprice:'      .$this->input->post('ticket_price'),
							'eventticketurl:'   .$this->input->post('ticket_url'),
							'eventdescription:' .$this->input->post('event_description'),
							'organisationname:' .$this->input->post('organisation_name')	
							);
		   	 
	       	$ch1 = curl_init();
       		      				    	
			    	if(!empty($_FILES['cover_img']['name']))
			       		{
				    	 $cover_page = curl_file_create($_FILES['cover_img']['tmp_name'],$_FILES['cover_img']['type']);
				    	}else
					    	{
					    		$cover_page = ""; 
					    	}

					if(!empty($_FILES['logo_img']['name']))
			       		{
				    	 $org_logo = curl_file_create($_FILES['logo_img']['tmp_name'],$_FILES['logo_img']['type']);
				    	}else
					    	{
					    		$org_logo = ""; 
					    	}
	
	    		$wowtag_img = array('coverpage'  => @$cover_page,'organisationlogo'  => @$org_logo);		    	 				
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/editproeventdetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data =json_decode($response1);	       	
		     	curl_close($ch1);
		     	
		     	print_r($data);
		     	
		     	if($data->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 
	}


}