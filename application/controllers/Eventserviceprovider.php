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
							'email:'    		.$this->input->post('email'), 
							'phone:'            .$this->input->post('phone_no'),	
							'businesstype:'     .$this->input->post('service_type'),	
							'category:'			.$this->input->post('event_startime'),
							'companyname:'   	.$this->input->post('organisation_name'),
							'venue:'      		.$this->input->post('venue'),
							'address1:'   		.$this->input->post('address1'),
							'address2:' 		.$this->input->post('address2'),
							'zipcode:'   		.$this->input->post('zipcode'),
							'state:'   			.$this->input->post('state'),
							'country:'   		.$this->input->post('country'),
							'websitelink:'   	.$this->input->post('web_link'),
							'venuedescription:' .$this->input->post('description')
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
		        $test =  $data1->success;
		        $this->session->set_userdata('success', $test);	
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	 
		// step 2 business hours

		    	$this->rest->http_header('token',  $this->session->userdata('token'));
		    	
	   			// $hours = array();
	   				   				
	   			// 	array_push($hours, array
	   			// 					(	   									
	   			//  						'weekday'    	=>  $_POST['faq_ques'][$i],
	   			//  						'availability'  =>  $_POST['faq_ans'][$i],
	   			//  						'opensfrom'     =>  $_POST['faq_ans'][$i],
	   			//  						'closedat'      =>  $_POST['faq_ans'][$i]
	   			 						
	   			//  					));	   				 
	   			

	    	  	$business_hours = array( 'eventserviceid ' 		    => $this->session->userdata('id'),
	    	  							'customerengagementbutton'  => $this->input->post('customer_engagement_btn'),	
	    	  							 'eventtype'    			=> $this->input->post('event_type'),
	    								 'eventcity'   				=> $this->input->post('event_city'),
	    								 'eventname'  				=> $this->input->post('name'),
	    								 'eventemail'  				=> $this->input->post('email'),
	    								 'eventphone' 	   			=> $this->input->post('phone_no'),
	    								 'eventdate' 	   			=> $this->input->post('event_date'),
	    								 'eventtime' 	   			=> $this->input->post('event_time'),
	    								 'comments' 	   			=> $this->input->post('comments'),
	    								 // 'businesshours' 	   		=> $this->input->post('keyword')
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($business_hours); 
				$result1 = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/eventservicehours',$json_data,'json');



		// step 3 product gallery

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'           .$token3,
		     				'eventserviceid:' 		.$this->session->userdata('id'),
							'producttitle1:'        .$this->input->post('img_title1'), 
							'productheading1:'      .$this->input->post('product_header1'),
							'productdescription1:'  .$this->input->post('product_description1'),
							'producttitle2:' 		.$this->input->post('video_title1'),
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

		   	$header1 = array('token:'           .$token,
		   					'firstname:'        .$this->input->post('first_name'), 
							'lastname:'    		.$this->input->post('last_name'), 
							'email:'    		.$this->input->post('email'), 
							'phone:'            .$this->input->post('phone_no'),	
							'businesstype:'     .$this->input->post('venue_type'),							
							'companyname:'   	.$this->input->post('organisation_name'),
							'venue:'      		.$this->input->post('venue'),
							'address1:'   		.$this->input->post('address1'),
							'address2:' 		.$this->input->post('address2'),
							'zipcode:'   		.$this->input->post('zipcode'),
							'state:'   			.$this->input->post('state'),
							'country:'   		.$this->input->post('country'),
							'websitelink:'   	.$this->input->post('web_link'),
							'venuedescription:' .$this->input->post('description')
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
		        $test =  $data1->success;
		        $this->session->set_userdata('success', $test);	
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	 
		// step 2 business hours

		    	$this->rest->http_header('token',  $this->session->userdata('token'));
		    	
	   			// $hours = array();
	   				   				
	   			// 	array_push($hours, array
	   			// 					(	   									
	   			//  						'weekday'    	=>  $_POST['faq_ques'][$i],
	   			//  						'availability'  =>  $_POST['faq_ans'][$i],
	   			//  						'opensfrom'     =>  $_POST['faq_ans'][$i],
	   			//  						'closedat'      =>  $_POST['faq_ans'][$i]
	   			 						
	   			//  					));	   				 
	   			

	    	  	$business_hours = array( 'eventserviceid ' 		    => $this->session->userdata('id'),
	    	  							'customerengagementbutton'  => $this->input->post('customer_engagement_btn'),	
	    	  							 'eventtype'    			=> $this->input->post('event_type'),
	    								 'eventcity'   				=> $this->input->post('event_city'),
	    								 'eventname'  				=> $this->input->post('name'),
	    								 'eventemail'  				=> $this->input->post('email'),
	    								 'eventphone' 	   			=> $this->input->post('phone_no'),
	    								 'eventdate' 	   			=> $this->input->post('event_date'),
	    								 'eventtime' 	   			=> $this->input->post('event_time'),
	    								 'comments' 	   			=> $this->input->post('comments'),
	    								 // 'businesshours' 	   		=> $this->input->post('keyword')
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($business_hours); 
				$result1 = $this->rest->post('http://104.197.80.225:3010/wow/eventservice/eventservicehours',$json_data,'json');



		// step 3 product gallery

				$token3 =  $this->session->userdata('token');
		     	$header3 = array('token:'           .$token3,
		     				'eventserviceid:' 		.$this->session->userdata('id'),
							'producttitle1:'        .$this->input->post('img_title1'), 
							'productheading1:'      .$this->input->post('product_header1'),
							'productdescription1:'  .$this->input->post('product_description1'),
							'producttitle2:' 		.$this->input->post('video_title1'),
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

}



