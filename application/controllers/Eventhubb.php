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

public function get_eventhubb()
	{
				$this->rest->http_header('token',  $this->session->userdata('token'));

		 		$data = array();
			   	$json_data = json_encode($data);  

			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/event/hubbfeeds',$json_data,'json');	
			   	$data['eventhubbfeed'] = $result->message;
			   	$this->load->view('eventhubb/event_hubb', $data);
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
           // print_r($result['event']);			
		   $this->load->view('eventhubb/edit_event_details', $result);
		   // $this->load->view('eventhubb/event_hubb', $result);
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
           // print_r($result['event']);			
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

public function get_eventcontact() //using form submit
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
           // print_r($result['event']);			
		   $this->load->view('eventhubb/edit_eventcontact', $result);
		   // $this->load->view('eventhubb/event_hubb', $result);
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


}