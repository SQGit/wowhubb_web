<?php
	
class Eventserviceprovider extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		 $this->load->library('session'); 
		 $this->load->helper(array('form','url'));
	}

public function service_provider_form()
{
	$this->load->view('eventserviceprovider/event_serviceprov_form');
}

// create event service provider form
public function create_eve_service_provider()
	{
		$response = array();
 	
 		//first step

 			$token   =  $this->session->userdata('token');	

		   	$header1 = array('token:'           .$token,
		   					'firstname:'        .$this->input->post('first_name'), 
							'lastname:'    		.$this->input->post('last_name'), 
							'email:'    		.$this->input->post('business_email'), 
							'phone:'            .$this->input->post('phone_no'),							
							'category:'			.$this->input->post('event_startime'),
							'companyname:'   	.$this->input->post('organisation_name'),
							'venue:'      		.$this->input->post('venue'),
							'address1:'   		.$this->input->post('address1'),
							'address2:' 		.$this->input->post('address2'),
							'zipcode:'   		.$this->input->post('zipcode'),
							'city:'   			.$this->input->post('city'),
							'state:'   			.$this->input->post('state'),
							'country:'   		.$this->input->post('country'),
							'websitelink:'   	.$this->input->post('web_link'),
							'venuedescription:' .$this->input->post('description'),
							'servicetype:'		.$this->input->post('service_type')

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
	
	    		$wowtag_img = array('coverpage'  => @$cover_page,'businesslogo'  => @$org_logo);		    	 				
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/eventservice/eventservicedetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 = json_decode($response1);
		        $id   =	 $data1->message->_id;		       
		    	$this->session->set_userdata('id', $id);
		     	curl_close($ch1);

		     	if($data1->success == true)
		     	{
		     		$this->session->set_userdata('eventservice', $data1->userservice->eventservice);	
		     	}
		     	 
		// step 2 business hours

		    	$this->rest->http_header('token',  $this->session->userdata('token'));
		    	$hours_count = count($this->input->post('days')); 
	   			$hours = array();

	   			for($i=0; $i<$hours_count; $i++)
	   			{	   				
	   				array_push($hours, array
	   								(	   									
	   			 						'weekday'    	=>  $this->input->post('days')[$i],
	   			 						'availability'  =>  $this->input->post('Availability')[$i],
	   			 						'opensfrom'     =>  $this->input->post('open_from')[$i],
	   			 						'closedat'      =>  $this->input->post('close_at')[$i]
	   			 						
	   			 					));	   				 
	   			}

	    	  	$business_hours = array( 'eventserviceid' 		    => $this->session->userdata('id'),
	    	  							'customerengagementbutton'  => $this->input->post('customer_engagement_btn'),	
	    	  							 'eventtype'    			=> $this->input->post('event_type'),
	    								 'eventcity'   				=> $this->input->post('event_city'),
	    								 'eventname'  				=> $this->input->post('name'),
	    								 'eventemail'  				=> $this->input->post('email'),
	    								 'eventphone' 	   			=> $this->input->post('phone'),
	    								 'eventdate' 	   			=> $this->input->post('event_date'),
	    								 'eventtime' 	   			=> $this->input->post('event_time'),
	    								 'comments' 	   			=> $this->input->post('comments'),
	    								 'businesshours' 	   		=> $hours
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($business_hours); 
				$result1 = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/eventservicehours',$json_data,'json');
				
		// step 3 product gallery

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'           .$token3,
		     				'eventserviceid:' 		.$this->session->userdata('id'),
							'producttitle1:'        .$this->input->post('img_title1'), 
							'productheading1:'      .$this->input->post('product_header1'),
							'discount1:'      		.$this->input->post('discount_value1'),
							'dicountbegin1:'      	.$this->input->post('begining_fromdate1'),
							'productdescription1:'  .$this->input->post('product_description1'),
							'producttitle2:' 		.$this->input->post('video_title2'),
							'productheading2:'      .$this->input->post('product_header2'),
							'discount2:'      		.$this->input->post('discount_value2'),
							'productheading2:'      .$this->input->post('product_header2'),
							'productdescription2:'  .$this->input->post('product_description2'),
							
							);
		   	 
	       		$ch3 = curl_init();
       		      				    	
			    	if(!empty($_FILES['product_img1']['name']))
			       		{
				    	 		$product_img1 = curl_file_create($_FILES['product_img1']['tmp_name'],$_FILES['product_img1']['type']);
				    	}else
					    	{
					    		$product_img1 = ""; 
					    	}
					
					if(!empty($_FILES['product_video1']['name']))
			       		{
				    	 		$product_video1 = curl_file_create($_FILES['product_video1']['tmp_name'],$_FILES['product_video1']['type']);
				    	}else
					    	{
					    		$product_video1 = ""; 
					    	}
					
				
	    		$product_gallery = array('productfile1'       => @$product_img1,
	    								 'productfile2'       => @$product_video1	    																 
	    								 );		    	 				
	    	 
	    	  	curl_setopt($ch3, CURLOPT_URL,'http://104.197.80.225:3010/wow/eventservice/eventservicegallery');	   
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $product_gallery); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);
	    	  	

	    	  	
	   	// step 4 keyword search

	    	 	$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$keyword_search = array('eventserviceid' 		 	=> $this->session->userdata('id'),
	    	  							'businesscoverageareas'  	=> $this->input->post('coverage_area[]'),	
	    	  							'rankclientbase'    	 	=> $this->input->post('rank'),
	    								'businesssearchkeywords'	=> $this->input->post('keyword_search[]'),
	    															 
	    								 );		

	    	  	$json_data = json_encode($keyword_search); 
				$result2 = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/eventservicekeyword',$json_data,'json');
				

		// step 5 FAQ's

				$this->rest->http_header('token',  $this->session->userdata('token'));

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

	   			$evnt_faq = array('eventserviceid'   => $this->session->userdata('id'),
	   							  'eventservicefaqs' => $event_faq
	   							 );

	   			$json_data = json_encode($evnt_faq); 
				$result3 = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/eventservicefaqs',$json_data,'json');
				

			if($result3->success == true)
					{		 	
						 $response['status'] = 'success'; 

					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 	

	}

public function eve_service_pro_landing()
{
		$this->rest->http_header('token',  $this->session->userdata('token'));
		$data = array();
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/myeventservice',$json_data,'json');
		$data['detail'] = $result->message;

		$this->load->view('eventserviceprovider/event_service_provider_landing', $data);
}

public function create_event_venue()
{
	$this->load->view('eventserviceprovider/create_event_venue');
}

// create event venue   form
public function create_event_venue_form()
	{
		$response = array();
 	
 		//first step

 			$token   =  $this->session->userdata('token');	

		   		$header1 = array('token:'       .$token,
		   					'firstname:'        .$this->input->post('first_name'), 
							'lastname:'    		.$this->input->post('last_name'), 
							'email:'    		.$this->input->post('business_email'), 
							'phone:'            .$this->input->post('phone_no'),							
							'category:'			.$this->input->post('event_startime'),
							'companyname:'   	.$this->input->post('organisation_name'),
							'venue:'      		.$this->input->post('venue'),
							'address1:'   		.$this->input->post('address1'),
							'address2:' 		.$this->input->post('address2'),
							'zipcode:'   		.$this->input->post('zipcode'),
							'city:'   			.$this->input->post('city'),
							'state:'   			.$this->input->post('state'),
							'country:'   		.$this->input->post('country'),
							'websitelink:'   	.$this->input->post('web_link'),
							'venuedescription:' .$this->input->post('description'),
							'venuetype:'		.$this->input->post('venue_type')
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
	
	    		$cover_img = array('coverpage'  => @$cover_page,'businesslogo'  => @$org_logo);		    	 				
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/eventvenue/eventvenueedetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $cover_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 = json_decode($response1);
		        $id   =	 $data1->message->_id;		       
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);

		     
		     	if($data1->success == true)
		     	{
		     		$this->session->set_userdata('eventvenue', $data1->uservenue->eventvenue);	
		     	}
		// step 2 business hours

		    	$this->rest->http_header('token',  $this->session->userdata('token'));
		    	
	    	  	$amenities = array('eventvenueid'       => $this->session->userdata('id'),
	    	  						'amenities'			=> $this->input->post('amenities[]'),
	    							'foodsandbeverages' => $this->input->post('foodsandbeverages[]')						 
	    						  );		

	    	  	$json_data = json_encode($amenities); 
				$result1 = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/eventvenueamenities',$json_data,'json');
				

		// step 3 product gallery

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'           	.$token3,
		     				'eventvenueid:'  			.$this->session->userdata('id'),
							'eventvenuehalltype:'       .$this->input->post('venue_hall_type'), 
							'eventvenuehallname:'      	.$this->input->post('hall_name'),
							'eventvenuehallseating:'  	.$this->input->post('seating_capacity'),
							'eventvenuehallstanding:' 	.$this->input->post('standing_capacity'),
							'eventvenuehalldescription' .$this->input->post('event_description'),
							'discount1:'      			.$this->input->post('discount_value1'),
							'dicountbegin1:'  			.$this->input->post('begining_fromdate1'),
							
							);
		   	 
	       		$ch3 = curl_init();
       		      				    	
			    	if(!empty($_FILES['hall_img1']['name']))
			       		{
				    	 		$hall_img1 = curl_file_create($_FILES['hall_img1']['tmp_name'],$_FILES['hall_img1']['type']);
				    	}else
					    	{
					    		$product_img1 = ""; 
					    	}
					
				
	    		$product_gallery = array('eventvenuehallimage' => @$hall_img1 );
	    										    	 				
	    	 
	    	  	curl_setopt($ch3, CURLOPT_URL,'http://104.197.80.225:3010/wow/eventvenue/eventvenuehalls');	   
		    	curl_setopt($ch3, CURLOPT_HTTPHEADER,$header3);
		    	curl_setopt($ch3, CURLOPT_POST, true);
		    	curl_setopt($ch3, CURLOPT_POSTFIELDS, $product_gallery); 	
		        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response3 = curl_exec($ch3); 	 
	    	  	$data3 =json_decode($response3);
	    	  	curl_close($ch3);

	    	  	
	   	// step 4 keyword search

	    	 	$this->rest->http_header('token',  $this->session->userdata('token'));

		    	$hours_count = count($this->input->post('days')); 
	   			$hours = array();

	   			for($i=0; $i<$hours_count; $i++)
	   			{	   				
	   				array_push($hours, array
	   								(	   									
	   			 						'day'    		=>  $this->input->post('days')[$i],
	   			 						'availability'  =>  $this->input->post('Availability')[$i],
	   			 						'dailyrate'     =>  $this->input->post('daily_rate')[$i],
	   			 						'hourlyrate'    =>  $this->input->post('hourly_rate')[$i]
	   			 					));	   				 
	   			}

	    	  	$keyword_search = array('eventvenueid'   		  => $this->session->userdata('id'),
	    	  							'pricingandavailability'  => $hours,	
	    	  							'businesscoverageareas'   => $this->input->post('coverage_area[]')
	    								 );		

	    	  	$json_data = json_encode($keyword_search); 
				$result2 = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/eventvenueavailability',$json_data,'json');
				
				

		// step 5 FAQ's

				$this->rest->http_header('token',  $this->session->userdata('token'));

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

	   			$venue_faq = array('eventvenueid'   => $this->session->userdata('id'),
	   							  'eventvenuefaqs' => $event_faq
	   							 );

	   			$json_data = json_encode($venue_faq); 
				$result3 = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/eventvenuefaqs',$json_data,'json');

			if($result3->success == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}
			echo json_encode($response); 	

	}

public function search_eventservice_provider()
{
	$this->load->view('eventserviceprovider/event_serviceprov_landing');
}

public function serviceprovider_keyword($Servicetype)
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('servicetype' => $Servicetype);
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/fetcheventservicebytype',$json_data,'json');

		$data['serviceprovider'] = $result->message;
		
		$this->load->view('eventserviceprovider/event_serviceprov_landing_ins',$data);
}

// particular business view
public function serviceprovider_business_view($id)
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('eventserviceid' => $id);
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/fetchparticulareventservice',$json_data,'json');		
		$data['serviceprovider'] = $result->message;
		
		$this->load->view('eventserviceprovider/event_serviceprov_view_business_page',$data);
}

// search particular service type
public function serviceprovider_search_key()
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('city' 		=> ucfirst($this->input->post('city')),
					  'servicetype' => $this->input->post('service_type')
					 );
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/filtereventservice',$json_data,'json');		
		$data['serviceprovider'] = $result->message;

		
		$this->load->view('eventserviceprovider/event_serviceprov_landing_ins',$data);
}

public function book_event_venue()
{
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array();
					 
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/myeventvenue',$json_data,'json');		
		$data['eventvenue'] = $result->message;

		$this->load->view('eventserviceprovider/event_venue_landing',$data);


}

// particular venue business view
public function venue_business_view($id)
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('eventvenueid' => $id);
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/fetchparticulareventvenue',$json_data,'json');		
		$data['eventvenues'] = $result->message;
		
		$this->load->view('eventserviceprovider/eventvenue_view_business_page',$data);
}

// search particular event venue type
public function eventvenue_search_key()
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('country' 	=> $this->input->post('country'),
					  'city' 		=> ucfirst($this->input->post('city')),
					  'venuetype' 	=> $this->input->post('venue_type')
					 );
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/filtereventvenue',$json_data,'json');		
		$data['eventvenue'] = $result->message;

		
		$this->load->view('eventserviceprovider/event_venue_landing',$data);
}


// particular event venue admin view
public function eventvenue_admin($id)
{
	
		$this->rest->http_header('token', $this->session->userdata('token'));
		$data = array('eventvenueid' => $id);
		$json_data = json_encode($data); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/eventvenue/showparticulareventvenue',$json_data,'json');		
		$data['eventvenues'] = $result->message;
		
		$this->load->view('eventserviceprovider/eventvenue_admin',$data);
}


public function inquiry_sendMail()
{
	    $config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'ssl://smtp.googlemail.com',
				  'smtp_port' => 465,
				  'smtp_user' => 'saranya.arapps@gmail.com', // change it to yours
				  'smtp_pass' => 'coolsaran10', // change it to yours
				  'mailtype' => 'html',
				  'charset' => 'iso-8859-1',
				  'wordwrap' => TRUE
				);

	    $message = 'something like to test';
	    $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    $this->email->from('saranya.arapps@gmail.com'); // change it to yours
	    $this->email->to('snsaranya553@gmail.com');// change it to yours
	    $this->email->subject('wowhubb test');
	    $this->email->message($message);
	     
	      if($this->email->send())
     		{
      			echo 'Email sent.';
     		}
     		else
    		{
     			show_error($this->email->print_debugger());
    		}

}


}



