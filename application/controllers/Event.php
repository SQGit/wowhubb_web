<?php
	
class Event extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		 $this->load->library('session'); 
		 $this->load->helper(array('form','url','date'));		 

	}

	
public function eventfeed()
	{
		if(is_null($this->session->userdata('email')))
	 	{ 	
	 		$this->load->view('login');
	 	}
	 	else
	 	{
			$this->load->view('event/eventfeed');
		}
	}
	
public function create_event()
	{
		if(is_null($this->session->userdata('email')))
	 	{ 	
	 		$this->load->view('login');
	 	}
	 	else
	 	{
			$this->load->view('event/create_event');
		}
	}

public function create_event_landing()
	{
		$this->load->view('event/event_landing');
	}

public function eenthubb()
	{
		$this->load->view('event/event_hubb');
	}


public function event_popup()
	{
		$this->load->view('event/event_popup');
	}

public function event_details()
	{
		$this->load->view('event/event_details');
	}
	
public function create_professional_landing()  //professional landing page 
	   {
	   		$this->load->view('event/create_professional_landing');
	   }

public function event_wowtag()  //wowtag page from eventfeed
	   {
	   		$this->load->view('event/wowtag');
	   }

public function nearby_event()  //wowtag page from eventfeed
	   {
	   		$this->load->view('event/nearby_events_landing');
	   }

public function nearby_event_details()  //wowtag page from eventfeed
	   {
	   		$this->load->view('event/nearby_events_details');
	   }

public function createpro_multiple_event()  //select option to redirect pages
	{
		
		if($_POST['city_count'] == 'city1')
			{
				$this->load->view('event/create_professional_event');  //single city
			}	
		else
			{
				$this->load->view('event/createpro_event_multicity');  //multiple city
			}
	}


public function create_social_landing()  //social landing page function
	   {
	   		$this->load->view('event/create_social_landing');
	   }


public function createsocial_multiple_event()  //select option to redirect pages
	{
		
		if($_POST['city_count'] == 'city1')
			{
				$this->load->view('event/create_social_event');  //single city
			}	
		else
			{
				$this->load->view('event/createsocial_event_multicity');  //multiple city
			}
	}

public function business_event()
	{
		$this->load->view('event/create_business_event');
	}

public function business_landing()
	   {
	   		$this->load->view('event/business_landing_page');
	   }

public function create()
	   {
	   		$this->load->view('mytest/create_test');
	   }

public function create_test()
	   {
	   			
	   			$pgm_schedule = array();
	   			
	   			// day 1 count
	   			$no_of_days = $this->input->post('no_of_days');

	   			for($day=1; $day<=$no_of_days; $day++)
	   			{	   				
	   				$no_of_events = count ($this->input->post('day'.$day.'_from_hour'));

	   				// echo "test";
	   				for($event=0; $event<$no_of_events; $event++)
	   				{
	   					// echo $event;
	   					array_push($pgm_schedule, array
						(
							'day'		   =>  $day,
							'eventnumber'  =>  '1',
							'starttime'    =>  $this->input->post('day'.$day.'_event_starttime'),
							'endtime'      =>  $this->input->post('day'.$day.'_event_endtime'),
							'facilitator'  =>  $this->input->post('day'.$day.'_facilitator_name')[$event],
							'location'     =>  $this->input->post('day'.$day.'_location')[$event],
							'agenda'       =>  $this->input->post('day'.$day.'_agenda')[$event],
							'itystarttime' =>  $this->input->post('day'.$day.'_from_hour')[$event].' '.$this->input->post('day'.$day.'_from_min')[$event].' '.$this->input->post('day'.$day.'_from_sec')[$event],
	   			 			'ityendtime'   =>  $this->input->post('day'.$day.'_to_hour')[$event].' '.$this->input->post('day'.$day.'_to_min')[$event].' '.$this->input->post('day'.$day.'_to_sec')[$event]
	   			 		));
	   			 	}	
	   			}

	   			 // $json_data = json_encode($pgm_schedule); 
	   			print "<pre>";
				// print_r($_POST);
				print_r($pgm_schedule);
				print "</pre>";
	   		// 		var_dump($_POST);
	   		
	   }
 
	      
public function event_popup_details()
	{
	 			
			 $radio_button =  $this->input->post('event_type');
			 $private = $this->input->post('private_personal');
			 $professional = $this->input->post('professional_corporate');
			 $social = $this->input->post('social');
			 $sales = $this->input->post('sales_business');

		if($radio_button == 1 ) //radio button value is 1
	 		{
	 		 	$event_type = 'personal_event'; 
	 		 	$this->session->set_userdata('event_type', $event_type);

	 		 	$select = $this->input->post('private_personal'); //select box condition check
	 		 	$text  = $this->input->post('private_other');
	 		 	if($select == 'others')
	 		 	{
	 		 		$data['event_category'] = $this->input->post('private_other');
	 			}
	 			 else 
	 			 {
	 				 $data['event_category'] = $this->input->post('private_personal');
	 			 }

	 		 	$this->load->view('event/create_event',$data);
	 		}

	 	if($radio_button == 2 ) 
	 		{
	 		 	$event_type = 'professional_event'; 
	 		 	$this->session->set_userdata('event_type', $event_type);
	 		 	
	 		 	$event_category = $this->input->post('professional_corporate');
	 		 	$this->session->set_userdata('event_category', $event_category);

	 		 	$data['event_category'] = $this->input->post('professional_corporate');
	 		 	$this->load->view('event/createpro_event_multicity', $data);
	 		}

	 	if($radio_button == 3 ) 
	 		{
	 		 	$event_type = 'socia1_event'; 
	 		 	$this->session->set_userdata('event_type', $event_type);

	 		 	$select = $this->input->post('social');
	 		 	$text  = $this->input->post('party_other');

	 		 	if($select == 'others')
	 		 	{
	 		 		$data['event_category'] = $this->input->post('party_other');
	 		 		$this->session->set_userdata('event_category', $text);
	 			}

	 			else
	 			 {
	 			 	$data['event_category'] = $this->input->post('social');
	 			 	$this->session->set_userdata('event_category', $select);
	 			 }

	 			 
	 			 $this->load->view('event/create_social_event',$data);
	 		}

	 	if($radio_button == 4 ) 
	 		{
	 		 	$event_type = 'business_event'; 
	 		 	$this->session->set_userdata('event_type', $event_type);

	 		 	$campaign_objective = $this->input->post('sales_business1');
	 		 	$this->session->set_userdata('campaign_objective', $campaign_objective);

	 		 	$event_category =  $this->input->post('sales_business');
	 		 	$this->session->set_userdata('event_category', $event_category);

	 		 	$data['event_type'] = $this->input->post('sales_business')." ".$this->input->post('sales_business1');	
	 		 	 $this->load->view('event/create_business_event',$data); 		 	
	 		}	 		 

 	} 
 

 
//create event for  personal event 

public function personal_event()
 {
 				$response = array();
 	//first step
 			
		     $start_date = $_POST['event_startdate'];
		     $end_date   = $_POST['event_enddate'];		    
		     $s_date = date('Y/m/d', strtotime($start_date)); 
		     $e_date = date('Y/m/d', strtotime($end_date));     


 			$token =  $this->session->userdata('token');		
 			
		   	$header1 = array('token:'			.$token,
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
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/details');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 =json_decode($response1);
		        $id = $data1->message->_id;
		        $test = $data1->success;
		        $this->session->set_userdata('success', $test);	
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	// print_r($data1);

		//second step

		     $runtime = $_POST['runtime_from'];
		     $totime = $_POST['totime_to'];
		     $runtime_from = date('Y/m/d', strtotime($runtime)); 
		     $totime_to = date('Y/m/d', strtotime($totime));   

		   		// if($this->session->userdata('success') == true)
		    	//  {	
		    	
		    	$token2 =  $this->session->userdata('token');
		     	$header2 = array('token:'  .$token2,
		     				'eventid:' 		.$this->session->userdata('id'),
		     				'eventcity:'   .$this->input->post('city'),
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
	    	  	$data2 =json_decode($response2);
	    	  	curl_close($ch2);
	    	  	
	    	 // }
	    	 // print_r($data2);

		

	   	// third step event venue
	    	
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
	   			$evnt_venue = array('eventid'                     => $this->session->userdata('id'),
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

				 $event_venue_result = $this->rest->post('http://104.197.80.225:3010/wow/event/venue',$json_data,'json');	  
				 // print_r($event_venue_result);

		//four step program shedule upload	    		
			
	  		 	$this->rest->http_header('token',  $this->session->userdata('token'));

	   			$pgm_schedule = array();
	   			
	   			// no.of days counts assign hidden input get by this value
	   			$no_of_days = $this->input->post('no_of_days');

	   			for($day=1; $day<=$no_of_days; $day++)
	   			{	   				
	   				$no_of_events = count ($this->input->post('day'.$day.'_from_hour'));

	   				
	   				for($event=0; $event<$no_of_events; $event++)
	   				{
	   					// echo $event;
	   					array_push($pgm_schedule, array
						(
							'day'		   =>  $day,
							'eventnumber'  =>  $event+1,
							'starttime'    =>  $this->input->post('day'.$day.'_event_starttime'),
							'endtime'      =>  $this->input->post('day'.$day.'_event_endtime'),
							'facilitator'  =>  $this->input->post('day'.$day.'_facilitator_name')[$event],
							'location'     =>  $this->input->post('day'.$day.'_location')[$event],
							'agenda'       =>  $this->input->post('day'.$day.'_agenda')[$event],
							'itystarttime' =>  $this->input->post('day'.$day.'_from_hour')[$event].' '.$this->input->post('day'.$day.'_from_min')[$event].' '.$this->input->post('day'.$day.'_from_sec')[$event],
	   			 			'ityendtime'   =>  $this->input->post('day'.$day.'_to_hour')[$event].' '.$this->input->post('day'.$day.'_to_min')[$event].' '.$this->input->post('day'.$day.'_to_sec')[$event]
	   			 		));
	   			 	}	
	   			}

	   			 $program_schedule = array('eventid'   => $this->session->userdata('id'),
			 						'programschedule' => $pgm_schedule); //array of array insert the values
				 
				 $json_data = json_encode($program_schedule); 

				 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/program',$json_data,'json');	  

	// print_r($result);

	//fifth  step event highlight  upload

			// if($this->session->userdata('success') == true)
		 //     {	

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'              .$token3,
		     				'eventid:' 		           .$this->session->userdata('id'),
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
					    		$highlight_img1 = ""; 
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
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $event_highlight); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);
	    	// }  	
 	// print_r($data3);

	//last step 6 event contact
				
	    	  	$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$event_contact = array('eventid' 		       => $this->session->userdata('id'),
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




//create event for  professional event  

public function professional_multicity_event()
 {
 	$response = array();
 	
 	//first step

 			$token   =  $this->session->userdata('token');	

 			 $start_date = $_POST['event_startdate'];
		     $end_date   = $_POST['event_enddate'];		    
		     $s_date = date('Y/m/d', strtotime($start_date)); 
		     $e_date = date('Y/m/d', strtotime($end_date));  
 			
		   	$header1 = array('token:'           .$token,
		   					'eventtype:'        .$this->input->post('event_type'), 
							'eventcategory:'    .$this->input->post('event_category'), 
							'eventtypeint:'     ."2",
							'eventname:'        .$this->input->post('event_name'),	
							'tickettype:'       .$this->input->post('ticket_type'),	
							'eventstartdate:'	.$s_date.' '.$this->input->post('event_startime'),
							'eventenddate:'   	.$e_date.' '. $this->input->post('event_endtiming'),
							'ticketprice:'      .$this->input->post('ticket_price'),
							'eventticketurl:'   .$this->input->post('ticket_url'),
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

					if(!empty($_FILES['logo_img']['name']))
			       		{
				    	 $org_logo = curl_file_create($_FILES['logo_img']['tmp_name'],$_FILES['logo_img']['type']);
				    	}else
					    	{
					    		$org_logo = ""; 
					    	}
	
	    		$wowtag_img = array('coverpage'  => @$cover_page,'organisationlogo'  => @$org_logo);		    	 				
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/proeventdetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 = json_decode($response1);
		        $id   =	 $data1->message->_id;
		        $test =  $data1->success;
		        $this->session->set_userdata('success', $test);	
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	// print_r($data1);

		//second step

		// if($this->session->userdata('success') == true)
		//     {	
		    	
		    	$token2  =  $this->session->userdata('token');

		     	$header2 = array('token:'  .$token2,
		     				'eventid:' 	   .$this->session->userdata('id'),		     				
							'eventtitle:'  .$this->input->post('event_title'), 
							'runtimefrom:' .$this->input->post('runtime_from'),
							'runtimeto:'   .$this->input->post('totime_to')					
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
	    	  	$data2 =json_decode($response2);
	    	  	curl_close($ch2);
	    	  	
	    	// }
	    	 // print_r($data2);

	    // third step event venue
	    	
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
	   			$evnt_venue = array('eventid'                     => $this->session->userdata('id'),
	   								'eventvenueaddressvisibility' => $this->input->post('eventvenue_addressvisible'),
	   								'eventvenueguestshare'        => $this->input->post('eventvenue_guestshare'),
	   								'onlineevent'                 => $this->input->post('eventvenue_onlineevent'),
	   								'inviteonlyevent'             => $this->input->post('eventvenue_inviteonlyevent'),						
			 						'faqquestion1'				  => '1.What is Event Age Requirement?',
			 						'faqanswer1'                  =>  $this->input->post('quesans1'),
			 						'faqquestion2'				  => '2.This is a kids friendly event?',
			 						'faqanswer2'				  => $this->input->post('quesans2'),	
			 						'faqquestion3'				  => '3.What are event parking/Transportantion options to and from event location?',
			 						'faqanswer3'				  => $this->input->post('quesans3'),
			 						'faqquestion4'				  => '4.What are allowed into the event venue?',
			 						'faqanswer4'				  =>  $this->input->post('quesans4'),	
			 						'eventfaqs'                   => $event_faq,
			 						'eventvenue'                  => $event_venue_location
			 					   ); 

	   			 $json_data = json_encode($evnt_venue); 

				 $event_venue_result = $this->rest->post('http://104.197.80.225:3010/wow/event/venue',$json_data,'json');	  
				 // print_r($event_venue_result);


	//four step program shedule upload	    		
			
	  		 $this->rest->http_header('token',  $this->session->userdata('token'));

	   			$pgm_schedule = array();
	   			
	   			// no.of days counts assign hidden input get by this value
	   			$no_of_days = $this->input->post('no_of_days');

	   			for($day=1; $day<=$no_of_days; $day++)
	   			{	   				
	   				$no_of_events = count ($this->input->post('day'.$day.'_from_hour'));

	   				
	   				for($event=0; $event<$no_of_events; $event++)
	   				{
	   					// echo $event;
	   					array_push($pgm_schedule, array
						(
							'day'		   =>  $day,
							'eventnumber'  =>  '1',
							'starttime'    =>  $this->input->post('day'.$day.'_event_starttime'),
							'endtime'      =>  $this->input->post('day'.$day.'_event_endtime'),
							'facilitator'  =>  $this->input->post('day'.$day.'_facilitator_name')[$event],
							'location'     =>  $this->input->post('day'.$day.'_location')[$event],
							'agenda'       =>  $this->input->post('day'.$day.'_agenda')[$event],
							'itystarttime' =>  $this->input->post('day'.$day.'_from_hour')[$event].' '.$this->input->post('day'.$day.'_from_min')[$event].' '.$this->input->post('day'.$day.'_from_sec')[$event],
	   			 			'ityendtime'   =>  $this->input->post('day'.$day.'_to_hour')[$event].' '.$this->input->post('day'.$day.'_to_min')[$event].' '.$this->input->post('day'.$day.'_to_sec')[$event]
	   			 		));
	   			 	}	
	   			}

	   			 $program_schedule = array('eventid'   => $this->session->userdata('id'),
			 						'programschedule' => $pgm_schedule); //array of array insert the values
				 
				 $json_data = json_encode($program_schedule); 

				 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/program',$json_data,'json');	  	

	// print_r($result);

	//fifth  step event highlight  upload

			// if($this->session->userdata('success') == true)
		 //     {	

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'              .$token3,
		     				'eventid:' 		           .$this->session->userdata('id'),
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
					    		$highlight_img1 = ""; 
					    	}

					
					if(!empty($_FILES['highlight_img2']['name']))
			       		{
				    	 $highlight_img2 = curl_file_create($_FILES['highlight_img2']['tmp_name'],$_FILES['highlight_img2']['type']);
				    	}else
					    	{
					    		$highlight_img2 = ""; 
					    	}
					
				
	    		$event_highlight = array('eventhighlights1'       => @$highlight_img1,
	    								 'eventhighlights2'       => @$highlight_img2,	    																 
	    								 );		    	 				
	    	 
	    	  	curl_setopt($ch3, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/highlights');	   
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $event_highlight); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);
	    	// }  	
 	// print_r($data3);

	// step 6 event contact
				
	    	  	$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  		// $keyword = array($this->input->post('keyword[]'));

	    	  	$event_contact = array( 'eventid' 		       => $this->session->userdata('id'),
	    	  							'organisationname'     => $this->input->post('organisation_name'),	
	    	  							 'eventcontactname'    => $this->input->post('contact_persona_name'),
	    								 'eventcontactphone'   => $this->input->post('eventcontactphone'),
	    								 'eventcontactemail'   => $this->input->post('eventcontactemail'),
	    								 'eventcontactmessage'  => $this->input->post('eventcontactmsg'),
	    								 'keywordsearch' 	   =>  $this->input->post('keyword[]')
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($event_contact); 
				$result2 = $this->rest->post('http://104.197.80.225:3010/wow/event/proeventcontact',$json_data,'json');
				// print_r($result2);


	  // seven  step 7 event tour
	    	
	    		$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  // event tour location

	   			$tour_count = count($this->input->post('event_tour_name')); 
	   			$event_tour_location = array();

	   			for($i=0; $i<$tour_count; $i++)
	   			{	   				
	   				array_push($event_tour_location, array
	   								(
	   									'eventtournumber'       =>  $i+1,
	   			 						'eventtourname'    		=>  $_POST['event_tour_name'][$i],
	   			 						'eventtourstartdate'    =>  $_POST['eventtour_startdate'][$i]." ".$_POST['eventtour_startime'][$i],
	   			 						'eventtourenddate'    	=>  $_POST['eventtour_enddate'][$i]." ".$_POST['eventtour_endtiming'][$i],
	   			 						'eventtourcountry'    	=>  $_POST['tour_country'][$i],
	   			 						'eventtourticketurl'    =>  $_POST['tour_ticket_url'][$i],
	   			 						'eventtourticketprice'  =>  $_POST['tour_ticket_price'][$i],
	   			 						'eventtouraddress1'     =>  $_POST['tour_address1'][$i],
	   			 						'eventtouraddress2'     =>  $_POST['tour_address2'][$i],
	   			 						'eventtourcity'    	    =>  $_POST['tour_city'][$i],
	   			 						'eventtourzipcode'      =>  $_POST['tour_zipcode'][$i]
	   			 						
	   			 					));	   				 
	   			} 

	   			$evnt_tour = array('eventid'                     => $this->session->userdata('id'),
	   								'eventtouraddressvisibility' => $this->input->post('eventtour_addressvisible'),
	   								'eventtourguestshare'        => $this->input->post('eventtour_guestshare'),
	   								'onlineeventtour'            => $this->input->post('eventtour_onlineevent'),
	   								'inviteonlyeventtour'        => $this->input->post('eventtour_inviteonlyevent'),
			 						'numberofcitiestour'         => $this->input->post('tour_noof_city'),
			 						'eventtour'                  => $event_tour_location
			 					   ); 

	   			 $json_data = json_encode($evnt_tour); 

				 $event_tour_result = $this->rest->post('http://104.197.80.225:3010/wow/event/tour',$json_data,'json');	  
				

	// step 8 event engagement

				// first select audience form

				if($this->input->post('audience_form_type') == 'audience_form')
					{	

						$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  			$event_contact = array( 
	    	  							'eventid' 		       => $this->session->userdata('id'),
	    	  							'engagementformtype'     => $this->input->post('audience_form_type'),	
	    	  							 'engagementformaction'    => $this->input->post('audience_formaction_btn'),
	    								 'fullname'   => $this->input->post('audience_full_name'),
	    								 'wowtagid'   => $this->input->post('audience_wowtag_id'),
	    								 'email'      => $this->input->post('audience_email'),
	    								 'phone' 	  => $this->input->post('audience_phone'),
	    								 'gender'	  => $this->input->post('audience_gender'),
	    								 'address1'   => $this->input->post('audience_address1'),
	    								 'address2'   => $this->input->post('audience_address2'),
	    								 'city'       => $this->input->post('audience_city'),
	    								 'zipcode'    => $this->input->post('audience_zipcode'),
	    								 'country'    => $this->input->post('audience_country')							 
	    								 );		

	    	  			$json_data = json_encode($event_contact); 
						$result3 = $this->rest->post('http://104.197.80.225:3010/wow/event/proengagementform',$json_data,'json');
					}
				

				// third select proffesional coupon

		    	else if($this->input->post('audience_form_type') == 'event_coupon')
		    	{
		    		
		    		$token4  =  $this->session->userdata('token');
		     		$header4 = array('token:'  .$token4,
		     				'eventid:' 		.$this->session->userdata('id'),
							'couponcode:'  .$this->input->post('coupon_code'), 
							'couponexpirydate:' .$this->input->post('coupon_ex_date'),
							'termsandconditions:'   .$this->input->post('terms_condition'),
							'engagementformtype:'   .$this->input->post('audience_form_type'),
							'engagementformaction:'   .$this->input->post('action_btn3')							
							);
		   	 
	       			$ch4 = curl_init();
       		      				    	
			    	if(!empty($_FILES['coupon_img']['name']))
			       		{
				    	 $couponimg = curl_file_create($_FILES['coupon_img']['tmp_name'],$_FILES['coupon_img']['type']);
				    	}else
					    	{
					    		$couponimg = ""; 
					    	}
	
	    			$coupon = array('couponimage'  => @$couponimg);    	 				
	    	 
	    	  		curl_setopt($ch4, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/proengagementcoupon');	   
		    		curl_setopt($ch4, CURLOPT_HTTPHEADER,$header4);
		    		curl_setopt($ch4, CURLOPT_POST, true);
		    		curl_setopt($ch4, CURLOPT_POSTFIELDS, $coupon); 	
		       		curl_setopt($ch4, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  		$response4 = curl_exec($ch4); 	 
	    	  		$data4 =json_decode($response4);
	    	  		curl_close($ch4);	    	  	
	    		}
	    		
	    	// url link ticket form
	    		
	    	 else if($this->input->post('audience_form_type') == 'url_link')
		    	{
		    		
					$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  // 		$url_count = count ($_POST['url_ticketurl']);	 
	    	  // 		$engagementurl=array() ;	
	    	  		

	   				// for($i=0; $i<$url_count; $i++)
	   				// {
	   				// 		array_push($engagementurl, array('url' =>$_POST['url_ticketurl'][$i],'country' =>$_POST['url_country'][$i], 'checked' =>$_POST['ticket_url_check'][$i] ) );
	   				// }

	    	  		$event_contact = array( 
	    	  					'eventid' 		    => $this->session->userdata('id'),
	    	  					'engagementformtype'   => $this->input->post('audience_form_type'),
	    						'engagementformaction' => $this->input->post('action_btn2'),
	    	  					'donationsurl'      => $this->input->post('url_donation_url'),	
	    	  				    'websiteurl'    	=> $this->input->post('url_website_url'),
	    					    'eventnolinks'   	=> $this->input->post('url_donthave_link')	    						
	    						// 'engagementurl'   	=> 	$engagementurl
	    									
	    						);		

	    	  		$json_data = json_encode($event_contact); 

	    	  		
					$result4 = $this->rest->post('http://104.197.80.225:3010/wow/event/proengagementurl',$json_data,'json');
					
				}
				
					
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



//create event for  social event  

public function social_multicity_event()
 {
 	$response = array();
 	
 	//first step

 			$token   =  $this->session->userdata('token');	

 			$start_date = $_POST['event_startdate'];
		    $end_date   = $_POST['event_enddate'];		    
		    $s_date = date('Y/m/d', strtotime($start_date)); 
		    $e_date = date('Y/m/d', strtotime($end_date));  
 			
		   	$header1 = array('token:'           .$token,
		   					'eventtype:'        .$this->input->post('event_type'), 
							'eventcategory:'    .$this->input->post('event_category'), 
							'eventtypeint:'     ."3",
							'eventname:'        .$this->input->post('event_name'),	
							'tickettype:'       .$this->input->post('ticket_type'),	
							'eventstartdate:'	.$s_date.' '.$this->input->post('event_startime'),
							'eventenddate:'   	.$e_date.' '. $this->input->post('event_endtiming'),
							'ticketprice:'      .$this->input->post('ticket_price'),
							'eventticketurl:'   .$this->input->post('ticket_url'),
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
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/proeventdetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 = json_decode($response1);
		        $id   =	 $data1->message->_id;
		        $test =  $data1->success;
		        $this->session->set_userdata('success', $test);	
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	// print_r($data1);

		//second step

		// if($this->session->userdata('success') == true)
		//     {	
		    	
		    	$token2  =  $this->session->userdata('token');

		     	$header2 = array('token:'  .$token2,
		     				'eventid:' 	   .$this->session->userdata('id'),		     				
							'eventtitle:'  .$this->input->post('event_title'), 
							'runtimefrom:' .$this->input->post('runtime_from'),
							'runtimeto:'   .$this->input->post('totime_to')					
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
	    	  	$data2 =json_decode($response2);
	    	  	curl_close($ch2);
	    	  	
	    	// }
	    	 // print_r($data2);

	    // third step event venue
	    	
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
	   			
	   			$evnt_venue = array('eventid'                     => $this->session->userdata('id'),
	   								'eventvenueaddressvisibility' => $this->input->post('eventvenue_addressvisible'),
	   								'eventvenueguestshare'        => $this->input->post('eventvenue_guestshare'),
	   								'onlineevent'                 => $this->input->post('eventvenue_onlineevent'),
	   								'inviteonlyevent'             => $this->input->post('eventvenue_inviteonlyevent'),
	   								'faqquestion1'				  => '1.What is Event Age Requirement?',
			 						'faqanswer1'                  =>  $this->input->post('quesans1'),
			 						'faqquestion2'				  => '2.This is a kids friendly event?',
			 						'faqanswer2'				  => $this->input->post('quesans2'),	
			 						'faqquestion3'				  => '3.What are event parking/Transportantion options to and from event location?',
			 						'faqanswer3'				  => $this->input->post('quesans3'),
			 						'faqquestion4'				  => '4.What are allowed into the event venue?',
			 						'faqanswer4'				  =>  $this->input->post('quesans4'),	
			 						'eventfaqs'                   => $event_faq,
			 						'eventvenue'                  => $event_venue_location
			 					   ); 

	   			 $json_data = json_encode($evnt_venue); 

				 $event_venue_result = $this->rest->post('http://104.197.80.225:3010/wow/event/venue',$json_data,'json');	  
				 // print_r($event_venue_result);


	//four step program shedule upload	    		
		
		$this->rest->http_header('token',  $this->session->userdata('token'));

	   			$pgm_schedule = array();
	   			
	   			// no.of days counts assign hidden input get by this value
	   			$no_of_days = $this->input->post('no_of_days');

	   			for($day=1; $day<=$no_of_days; $day++)
	   			{	   				
	   				$no_of_events = count ($this->input->post('day'.$day.'_from_hour'));

	   				
	   				for($event=0; $event<$no_of_events; $event++)
	   				{
	   					// echo $event;
	   					array_push($pgm_schedule, array
						(
							'day'		   =>  $day,
							'eventnumber'  =>  '1',
							'starttime'    =>  $this->input->post('day'.$day.'_event_starttime'),
							'endtime'      =>  $this->input->post('day'.$day.'_event_endtime'),
							'facilitator'  =>  $this->input->post('day'.$day.'_facilitator_name')[$event],
							'location'     =>  $this->input->post('day'.$day.'_location')[$event],
							'agenda'       =>  $this->input->post('day'.$day.'_agenda')[$event],
							'itystarttime' =>  $this->input->post('day'.$day.'_from_hour')[$event].' '.$this->input->post('day'.$day.'_from_min')[$event].' '.$this->input->post('day'.$day.'_from_sec')[$event],
	   			 			'ityendtime'   =>  $this->input->post('day'.$day.'_to_hour')[$event].' '.$this->input->post('day'.$day.'_to_min')[$event].' '.$this->input->post('day'.$day.'_to_sec')[$event]
	   			 		));
	   			 	}	
	   			}

	   			 $program_schedule = array('eventid'   => $this->session->userdata('id'),
			 						'programschedule' => $pgm_schedule); //array of array insert the values
				 
				 $json_data = json_encode($program_schedule); 

				 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/program',$json_data,'json');	  	
	  		 	

	// print_r($result);

	//fifth  step event highlight  upload

			// if($this->session->userdata('success') == true)
		 //     {	

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'              .$token3,
		     				'eventid:' 		           .$this->session->userdata('id'),
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
					    		$highlight_img1 = ""; 
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
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $event_highlight); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);
	    	// }  	
 	// print_r($data3);

	// step 6 event contact
				
	    	  	$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$event_contact = array( 'eventid' 		       => $this->session->userdata('id'),
	    	  							'organisationname'     => $this->input->post('organisation_name'),	
	    	  							 'eventcontactname'    => $this->input->post('contact_persona_name'),
	    								 'eventcontactphone'   => $this->input->post('eventcontactphone'),
	    								 'eventcontactemail'   => $this->input->post('eventcontactemail'),
	    								 'eventcontactmessage'  => $this->input->post('eventcontactmsg'),
	    								 'keywordsearch' 	   => $this->input->post('keyword')
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($event_contact); 
				$result2 = $this->rest->post('http://104.197.80.225:3010/wow/event/proeventcontact',$json_data,'json');
				// print_r($result2);

   // seven  step 7 event tour
	    
	    		$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  // event tour location

	   			$tour_count = count($this->input->post('event_tour_name')); 
	   			$event_tour_location = array();

	   			for($i=0; $i<$tour_count; $i++)
	   			{	   				
	   				array_push($event_tour_location, array
	   								(
	   									'eventtournumber'       =>  $i+1,
	   			 						'eventtourname'    		=>  $_POST['event_tour_name'][$i],
	   			 						'eventtourstartdate'    =>  $_POST['eventtour_startdate'][$i]." ".$_POST['eventtour_startime'][$i],
	   			 						'eventtourenddate'    	=>  $_POST['eventtour_enddate'][$i]." ".$_POST['eventtour_endtiming'][$i],
	   			 						'eventtourcountry'    	=>  $_POST['tour_country'][$i],
	   			 						'eventtourticketurl'    =>  $_POST['tour_ticket_url'][$i],
	   			 						'eventtourticketprice'  =>  $_POST['tour_ticket_price'][$i],
	   			 						'eventtouraddress1'     =>  $_POST['tour_address1'][$i],
	   			 						'eventtouraddress2'     =>  $_POST['tour_address2'][$i],
	   			 						'eventtourcity'    	    =>  $_POST['tour_city'][$i],
	   			 						'eventtourzipcode'      =>  $_POST['tour_zipcode'][$i]
	   			 						
	   			 					));	   				 
	   			} 

	   			$evnt_tour = array('eventid'                     => $this->session->userdata('id'),
	   								'eventtouraddressvisibility' => $this->input->post('eventtour_addressvisible'),
	   								'eventtourguestshare'        => $this->input->post('eventtour_guestshare'),
	   								'onlineeventtour'            => $this->input->post('eventtour_onlineevent'),
	   								'inviteonlyeventtour'        => $this->input->post('eventtour_inviteonlyevent'),
			 						'numberofcitiestour'         => $this->input->post('tour_noof_city'),
			 						'eventtour'                  => $event_tour_location
			 					   ); 

	   			 $json_data = json_encode($evnt_tour); 

				 $event_tour_result = $this->rest->post('http://104.197.80.225:3010/wow/event/tour',$json_data,'json');	  
				

	// step 8 event engagement

				// first select audience form

				if($this->input->post('audience_form_type') == 'audience_form')
					{	

						$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  			$event_contact = array( 
	    	  							 'eventid' 		        => $this->session->userdata('id'),
	    	  							 'engagementformtype'   => $this->input->post('audience_form_type'),	
	    	  							 'engagementformaction' => $this->input->post('audience_formaction_btn'),
	    								 'fullname'   			=> $this->input->post('audience_full_name'),
	    								 'wowtagid'   			=> $this->input->post('audience_wowtag_id'),
	    								 'email'      			=> $this->input->post('audience_email'),
	    								 'phone' 	  			=> $this->input->post('audience_phone'),
	    								 'gender'	  			=> $this->input->post('audience_gender'),
	    								 'address1'   			=> $this->input->post('audience_address1'),
	    								 'address2'   			=> $this->input->post('audience_address2'),
	    								 'city'       			=> $this->input->post('audience_city'),
	    								 'zipcode'    			=> $this->input->post('audience_zipcode'),
	    								 'country'    			=> $this->input->post('audience_country')							 
	    								 );		

	    	  			$json_data = json_encode($event_contact); 
						$result3 = $this->rest->post('http://104.197.80.225:3010/wow/event/proengagementform',$json_data,'json');
					}
				

				// third select proffesional coupon

		    	else if($this->input->post('audience_form_type') == 'event_coupon')
		    	{
		    		
		    		$token4  =  $this->session->userdata('token');
		     		$header4 = array('token:'  .$token4,
		     				'eventid:' 		.$this->session->userdata('id'),
							'couponcode:'  .$this->input->post('coupon_code'), 
							'couponexpirydate:' .$this->input->post('coupon_ex_date'),
							'termsandconditions:'   .$this->input->post('terms_condition'),
							'engagementformtype:'   .$this->input->post('audience_form_type'),
							'engagementformaction:'   .$this->input->post('action_btn3')							
							);
		   	 
	       			$ch4 = curl_init();
       		      				    	
			    	if(!empty($_FILES['coupon_img']['name']))
			       		{
				    	 $couponimg = curl_file_create($_FILES['coupon_img']['tmp_name'],$_FILES['coupon_img']['type']);
				    	}else
					    	{
					    		$couponimg = ""; 
					    	}
	
	    			$coupon = array('couponimage'  => @$couponimg);    	 				
	    	 
	    	  		curl_setopt($ch4, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/proengagementcoupon');	   
		    		curl_setopt($ch4, CURLOPT_HTTPHEADER,$header4);
		    		curl_setopt($ch4, CURLOPT_POST, true);
		    		curl_setopt($ch4, CURLOPT_POSTFIELDS, $coupon); 	
		       		curl_setopt($ch4, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  		$response4 = curl_exec($ch4); 	 
	    	  		$data4 =json_decode($response4);
	    	  		curl_close($ch4);	    	  	
	    		}
	    		
	    	// url link ticket form
	    		
	    	 else if($this->input->post('audience_form_type') == 'url_link')
		    	{
		    		
					$this->rest->http_header('token',  $this->session->userdata('token'));	    	  

	    	  		$event_contact = array( 
	    	  					'eventid' 		        => $this->session->userdata('id'),
	    	  					'engagementformtype'    => $this->input->post('audience_form_type'),
	    						'engagementformaction'  => $this->input->post('action_btn2'),
	    	  					'donationsurl'      	=> $this->input->post('url_donation_url'),	
	    	  				    'websiteurl'    		=> $this->input->post('url_website_url'),
	    					    'eventnolinks'   		=> $this->input->post('url_donthave_link')   						
    									
	    						);		

	    	  		$json_data = json_encode($event_contact); 

	    	  		
					$result4 = $this->rest->post('http://104.197.80.225:3010/wow/event/proengagementurl',$json_data,'json');
					
				}
				
					
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


//create event for business event 

public function create_business_event()
	{

		$response = array();
	 	
	 	//first step

	 			$token   =  $this->session->userdata('token');	
	 			
			   	$header1 = array('token:'            .$token,
			   					'eventtype:'         .$this->input->post('event_type'), 
								'eventcategory:'     .$this->input->post('event_category'),
								'eventtypeint:'      ."4", 
								'brandawareness:'    .$this->input->post('brand_awareness'),	
								'eventname:'         .$this->input->post('event_name'),	
								'eventstartdate:'    .$this->input->post('event_startdate').' '.$this->input->post('event_startime'),
								'eventenddate:'      .$this->input->post('event_enddate').' '.$this->input->post('event_endtiming'),
								'eventdescription:'  .$this->input->post('event_description')
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
		
		    		$wowtag_img = array('coverpage'  => @$cover_page,'sponsorslogo'  => @$org_logo);		    	 				
		    	
		    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/saleseventdetails');	   
			    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
			    	curl_setopt($ch1, CURLOPT_POST, true);
			    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
			        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
		    	  	$response1 = curl_exec($ch1); 	    	
			    	$data1 = json_decode($response1);
			        $id   =	 $data1->message->_id;
			        $user_id =  $data1->success;
			        $this->session->set_userdata('success', $user_id);	
			    	$this->session->set_userdata('id', $id);	
			     	curl_close($ch1);	

		// second step 

			    $token2  =  $this->session->userdata('token');

		     	$header2 = array('token:'  .$token2,
		     				'eventid:' 	   .$this->session->userdata('id'),		     				
							'eventtitle:'  .$this->input->post('event_title'), 
							'runtimefrom:' .$this->input->post('runtime_from'),
							'runtimeto:'   .$this->input->post('totime_to')					
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
	    	  	$data2 =json_decode($response2);
	    	  	curl_close($ch2);

	    // third step for online shopping website

	    	 $this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$online_shopping = array('eventid' 		               => $this->session->userdata('id'),
	    	  							 'onlinesalesobjective'        => $this->input->post('online_sales_objective'),
	    								 'onlinesalespromotioncountry' => $this->input->post('online_country'),
	    								 'onlinesalespromotionstate'   => $this->input->post('online_state'),
	    								 'onlinesalespromotionurl'     => $this->input->post('sales_online_url')	    															 
	    								 );		

	    	  	$json_data = json_encode($online_shopping); 
				$online_shopping_result = $this->rest->post('http://104.197.80.225:3010/wow/event/saleseventonlinelinks',$json_data,'json'); 

		// third step for physical store visit

	    	 $this->rest->http_header('token',  $this->session->userdata('token'));

	    	 // physical  store location

	   			$store_count = count($this->input->post('store_name')); 
	   			$store_location = array();

	   			for($i=0; $i<$store_count; $i++)
	   			{	   				
	   				array_push($store_location, array
	   								(
	   									'storename'     =>  $_POST['store_name'][$i],
	   			 						'storeaddress'  =>  $_POST['store_address'][$i],
	   			 						'zipcode'    	=>  $_POST['store_zipcode'][$i],
	   			 						'city'      	=>  $_POST['store_city'][$i]
	   			 						
	   			 					));	   				 
	   			}


	    	  	$physical_store = array('eventid' 		                 => $this->session->userdata('id'),
	    	  							 'physicalsalespromotioncountry' => $this->input->post('physical_country'),
	    								 'physicalsalespromotionstate'   => $this->input->post('physical_state'),
	    								 'physicalsalesstorelocation'    => $store_location
	    								    															 
	    								);		

	    	  	$json_data = json_encode($physical_store); 
				$physical_store_result = $this->rest->post('http://104.197.80.225:3010/wow/event/saleseventphysicallinks',$json_data,'json'); 

				// step four sales event offering

				$token3  =  $this->session->userdata('token');

		     	$header3 = array('token:'  .$token3,
		     				'eventid:' 	   .$this->session->userdata('id'),		     				
							'eventsalesservicename1:'  .$this->input->post('service_name1'), 
							'eventsalesdiscount1:'     .$this->input->post('discount_value1'),
							'eventsalescouponfrom1:'   .$this->input->post('begining_from1'),
							'eventsalescouponto1:'     .$this->input->post('begining_end1'),
							'eventsalesaction1:'       .$this->input->post('audience_callto_action'),
							'eventsalesterms1:'        .$this->input->post('sales_terams1'),
							'eventsalesservicename2:'  .$this->input->post('service_name2'),
							'eventsalesdiscount2:'     .$this->input->post('discount_value2'),
							'eventsalescouponfrom2:'   .$this->input->post('begining_from2'),
							'eventsalescouponto2:'     .$this->input->post('begining_end2'),
							'eventsalesaction2:'       .$this->input->post('audience_callto_actio2'),
							'eventsalesterms2:'        .$this->input->post('sales_terams2')
										
							);
		   	 
	       		$ch3 = curl_init();
       		      				    	
			    	if(!empty($_FILES['coupon_img1']['name']))
			       		{
				    	 $coupon_img1 = curl_file_create($_FILES['coupon_img1']['tmp_name'],$_FILES['coupon_img1']['type']);
				    	}else
					    	{
					    		$coupon_img1 = ""; 
					    	}

					 if(!empty($_FILES['coupon_img2']['name']))
			       		{
				    	 $coupon_img2 = curl_file_create($_FILES['coupon_img2']['tmp_name'],$_FILES['coupon_img2']['type']);
				    	}else
					    	{
					    		$coupon_img2 = ""; 
					    	}
			
	
	    		$coupon_images = array('eventsalescoupon1'  => @$coupon_img1, 'eventsalescoupon2'  => @$coupon_img2  );	    	 				
	    	 
	    	  	curl_setopt($ch3, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/saleseventofferings');	   
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $coupon_images); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);


	    // fifth step for publish and promote

	    	 $this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$publish_promote = array('eventid' 		      => $this->session->userdata('id'),
	    	  							 'organisationname'   => $this->input->post('sales_organization_name'),
	    								 'salesemail'         => $this->input->post('sales_email'),
	    								 'salesphonenumber'   => $this->input->post('sales_phone'),
	    								 'saleshostmessage'   => $this->input->post('sales_host_msg')	    															 
	    								 );		

	    	  	$json_data = json_encode($publish_promote); 
				$promote_result = $this->rest->post('http://104.197.80.225:3010/wow/event/saleseventpromote',$json_data,'json'); 

				if($promote_result->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 


	} 

//home event feed page 	  

public function get_eventfeed()  
	{
		   	if(is_null($this->session->userdata('email')))
		 	{ 	
		 		$this->load->view('login');
		 	}
		 	else
		 	{	   	
	   			  $this->rest->http_header('token', $this->session->userdata('token'));
			   	  $data = array();
			   	  $json_data = json_encode($data); 

			   	  // $data1 = array();
			   	  // $json_data1 = json_encode($data1); 

			   	  $result = $this->rest->post('http://104.197.80.225:3010/wow/event/newfeed',$json_data,'json');	
			   	 
			   	   $data['eventfeed'] = $result->message;

			   	  if($result->success == true)
			   	  {	
			   	  	
			   	  	$this->today_event(); //this is function call	
			   	  	$data['todayfeed'] = $this->today_event();   	  	
			   	  	// $this->$data['todayfeed'];
			   	  	// print_r($data['todayfeed'] );
			   	  	$this->load->view('event/eventfeed', $data);
			   	  }	
			   	  else
			   	  {
			   	  	$this->load->view('event/eventfeed_nodata', $data);
			   	  }	

				  
		 	}
	}

public function today_event()
	{
				  $this->rest->http_header('token', $this->session->userdata('token'));
			   	  $data = array();
			   	  $json_data = json_encode($data); 

			   	   $today_event = $this->rest->post('http://104.197.80.225:3010/wow/event/todaysfeed',$json_data,'json');
			   	   if($today_event->success == true)
			   	  	{	
				   	   $data['todayfeed'] = $today_event->message;
				   	   return $data['todayfeed'];  //here variable send to get_eventfeed
			   	   } 
			   	   
	}

//profile page shows my  event feeds 
public function profile_get_eventfeed()  
	{ 
		   	if(is_null($this->session->userdata('email')))
		 	{ 	
		 		$this->load->view('login');
		 	}
		 	else
		 	{	   	
	   			 $this->rest->http_header('token', $this->session->userdata('token'));
			   	  $data = array();
			   	  $json_data = json_encode($data); 
			   	  $result = $this->rest->post('http://104.197.80.225:3010/wow/event/myfeeds',$json_data,'json');	   	 
			   	  $data['eventfeed'] = $result->message;	   	    	   	 
				 // print_r($result);
				 $this->load->view('profile/profile_eventfeed', $data);
		 	}
	}

public function search($search_val) //add search and friend request
   {
			   
			   	$this->rest->http_header('token', $this->session->userdata('token'));
			   	$search =array('search' => $search_val);
			   	$json_data = json_encode($search);
			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/friendsuggestion',$json_data,'json');
			   	if($result->success)
					{	 
						 $response = $result->message;
						 echo '<ul  class="live-search-list">';						
						 foreach ($response as $responses) {
						 	echo '<li><a href="'.base_url().'Searchfriends/add_friends">'.$responses->firstname.'</a></li>';  //here add base url
						 }						 
						 echo '</ul>';
					}
				  else 
				   {	
						 echo 'failed';						 
				    }					

	}
	 
public function get_eventdetails() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
           // print_r($result['event']);			
		   $this->load->view('event/event_details', $result);
 	}	  
	   

public function wowsome($id)
	{
	   		$response = array(); 
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	  $data = array('eventid' =>  $id);
		   	 $json_data = json_encode($data); 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/wowsome',$json_data,'json');
		   	  // print_r($result);
		   	 // $wow = $result->message->wowsome;
		   	 // $this->load->view('event/eventfeed', $wow);
		  if(isset($result->success) && ($result ->success == true))
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $result->wowsomes;
			}
		  else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }
			echo json_encode($response);
	}

public function rsvp_update()
	{
	   		$response = array(); 
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	  $data = array('eventid' => $this->input->post('bookId'),
		  						'extra' => $this->input->post('rsvp'));
		   	 $json_data = json_encode($data); 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/postrsvp',$json_data,'json');
		   	  // print_r($result);
		   if($result->success) 
			{		 
				 $response['status'] = 'success'; 				
			}
		  else 
		   {	
				 $response['status'] = 'failed';		 	 	
		    }
			echo json_encode($response);
	}

public function comments($command_id)
	{
	   		
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	  $data = array('eventid' =>  $command_id,
		  					'comment' => $this->input->post('comments'));
		   	 $json_data = json_encode($data); 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/postcomment',$json_data,'json');

		   	 // $data['comment'] = $result->message;

			  // print_r($data['comment']);
		 
		   	 redirect('event/get_eventfeed'); //page redirect 
	 }

//keyword search for professional event
public function keyword()
	{
		$response = array(); 
		$this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		 		
		 		$data = array('search' =>  $this->input->post('keyword'));
		  					
		 		$json_data = json_encode($data); 
		   	 	$result = $this->rest->post('http://104.197.80.225:3010/wow/event/keywordsuggestion',$json_data,'json');

		   	 	// print_r($result);

		if(isset($result->success) && ($result ->success == true))
			{		 
				 $response['status'] = 'success'; 
				 // $response['message'] = $result->message;
				 foreach($result->message as $messages)
				 {
				 	// echo $messages->word;
				 	$response['msg'] = $messages->word;
				 	// print_r($response['msg']);
				 }
			}
		else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }

			echo json_encode($response);

	}	   

//publish thoughts for event feed page
public function update_thoughts()
	{
			
			$response = array(); 	

			$url_link = $this->input->post('thought_url_link');		
			$tags = get_meta_tags($test);
            // $link_keyword = $tags['keywords']; 

            // if(isset($tags['keywords']))
            // {
            // 	$link_keyword = $tags['keywords']; 
            // }
            // else
            // {
            // 	$link_keyword = ""; 
            // }

            	libxml_use_internal_errors(true);  // Yeah if you are so worried about using @ with warnings
				$c = file_get_contents("$url_link");
				$d = new DomDocument();
				$d->loadHTML($c);
				$xp = new domxpath($d);

				if(isset($xp))
				{
					foreach ($xp->query("//meta[@property='og:title']" ) as $el)
						{
											
						    	$title = $el->getAttribute("content");
						    
						}

				foreach ($xp->query("//meta[@property='og:description']") as $el)
					{
					    $description = $el->getAttribute("content");
					}

				$i=0;

				foreach ($xp->query("//meta[@property='og:image']") as $el)
					 {
						if($i++ == 0)
							 {
								  $img =  $el->getAttribute("content");
								 
							 }					  
					}
				}	

			$token    =  $this->session->userdata('token');	
 			
		   	$header   = array('token:'        .$token,
		   					  'eventtype:'    .'thought',
		   					  'thoughtstext:' .$this->input->post('texts'),
		   					  'urllink:'      .$this->input->post('thought_url_link'), 
		   					  'title:'  	  .$title,
		   					  'description:'  .$description,
		   					  'imageurl:'  	  .$img

		   					);

			$ch = curl_init();
       		      				    	
			    	if(!empty($_FILES['thought_img']['name']))
			       		{
				    	 $thought_img = curl_file_create($_FILES['thought_img']['tmp_name'],$_FILES['thought_img']['type']);
				    	}else
					    	{
					    		$thought_img = ""; 
					    	}

					if(!empty($_FILES['thought_video']['name']))
			       		{
				    	 $thought_video = curl_file_create($_FILES['thought_video']['tmp_name'],$_FILES['thought_video']['type']);
				    	}else
					    	{
					    		$thought_video = ""; 
					    	}
			
	
	    		$thought_files = array('thoughtsimage' => @$thought_img, 'thoughtsvideo'  => @$thought_video );	    	 				
	    	 
	    	  	curl_setopt($ch, CURLOPT_URL,'http://104.197.80.225:3010/wow/event/thoughts');	   
		    	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
		    	curl_setopt($ch, CURLOPT_POST, true);
		    	curl_setopt($ch, CURLOPT_POSTFIELDS, $thought_files); 	
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch);   	 

		   	 	// print_r($data3);

		if(isset($data3->success) && ($data3 ->success == true))
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $data3->message;
				
			}
		else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $data3->message;
		    }

			echo json_encode($response);

	}	 

// thoughts detele
public function thoughts_delete($delete_id)
	{
			
			$response = array(); 
			$this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		 		
		 		$data = array('thoughtid' => $delete_id);
		  					
		 		$json_data = json_encode($data); 
		   	 	$result = $this->rest->post('http://104.197.80.225:3010/wow/event/deletethought',$json_data,'json');

		   	 	// print_r($result);

				if(isset($result->success) && ($result ->success == true))
					{		 
						 $response['status'] = 'success'; 
						// $response['message'] = $result->message;
						
					}
				else 
				   {	
						 $response['status'] = 'failed';
				 	 	 $response['message'] = $result->message;
				    }

					echo json_encode($response);
	}


// thought commands
public function thought_comments($thought_com_id)
	{
	   		
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	  $data = array('thoughtid' =>  $thought_com_id,
		  					'comment' => $this->input->post('comments'));
		   	 $json_data = json_encode($data); 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/postthoughtscomment',$json_data,'json');

		   	 // $data['comment'] = $result->message;

			  // print_r( $result);
		 
		   	 redirect('event/get_eventfeed'); //page redirect 
	}


//thought wowsome 
public function thought_wowsome($thought_wow_id)
	{
	   		$response = array(); 
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	  $data = array('thoughtid' =>  $thought_wow_id);
		   	 $json_data = json_encode($data); 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/event/thoughtswowsome',$json_data,'json');
		   	 
		  if(isset($result->success) && ($result ->success == true))
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $result->wowsomes;
			}
		  else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }
			echo json_encode($response);
	}


public function thoughtlink()
	{	

		// $link = $this->input->post('thought_url_link');
		// $tags = get_meta_tags($link);
  //       echo $tags['keywords']; 
        echo 'fhhgf';
	}

}	

?>