<?php
	
class Business extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		 $this->load->library('session'); 
		 $this->load->helper(array('form','url','date'));		 

	}

public function business_page_landing()
	{
		$this->load->view('business/create_business_page');
	}




// organisation hosting page form 
public function ohp_form()   
	{
		$this->load->view('business/ohp_eventhosting_form');
	}

public function create_business_page()   
	{
		$response = array();
 	
 	//first step business details

		if($this->input->post('business_type') == 'company')
			{	

		 			$token   =  $this->session->userdata('token');	
		 			
				   	$header1 = array('token:'           .$token,
				   					'firstname:'        .$this->input->post('first_name'), 
									'lastname:'    .$this->input->post('last_name'), 
									'email:'     .$this->input->post('email'),
									'phone:'        .$this->input->post('phone'),	
									'businesstype:'       .$this->input->post('business_type'),	
									'category:'      .$this->input->post('company_category'),
									'companyname:'   .$this->input->post('company_name'),
									'venue:' .$this->input->post('venue'),
									'address1:'   .$this->input->post('address1'),
									'address2:'   .$this->input->post('address2'),
									'zipcode:'   .$this->input->post('zipcode'),
									'state:'   .$this->input->post('state'),
									'country:'   .$this->input->post('country'),
									'websitelink:'   .$this->input->post('website_link'),
									'description:'   .$this->input->post('description'),

									);
			}

		else if($this->input->post('business_type') == 'public')
			{	

		 			$token   =  $this->session->userdata('token');	
		 			
				   	$header1 = array('token:'           .$token,
				   					'firstname:'        .$this->input->post('first_name'), 
									'lastname:'    .$this->input->post('last_name'), 
									'email:'     .$this->input->post('email'),
									'phone:'        .$this->input->post('phone'),	
									'businesstype:'       .$this->input->post('business_type'),	
									'category:'      .$this->input->post('public_category'),
									'companyname:'   .$this->input->post('company_name'),
									'venue:' .$this->input->post('venue'),
									'address1:'   .$this->input->post('address1'),
									'address2:'   .$this->input->post('address2'),
									'zipcode:'   .$this->input->post('zipcode'),
									'state:'   .$this->input->post('state'),
									'country:'   .$this->input->post('country'),
									'websitelink:'   .$this->input->post('website_link'),
									'description:'   .$this->input->post('description'),

									);
			}

		else if($this->input->post('business_type') == 'local_business')
			{	

		 			$token   =  $this->session->userdata('token');	
		 			
				   	$header1 = array('token:'           .$token,
				   					'firstname:'        .$this->input->post('first_name'), 
									'lastname:'    .$this->input->post('last_name'), 
									'email:'     .$this->input->post('email'),
									'phone:'        .$this->input->post('phone'),	
									'businesstype:'       .$this->input->post('business_type'),	
									'category:'      .$this->input->post('local_category'),
									'companyname:'   .$this->input->post('company_name'),
									'venue:' .$this->input->post('venue'),
									'address1:'   .$this->input->post('address1'),
									'address2:'   .$this->input->post('address2'),
									'zipcode:'   .$this->input->post('zipcode'),
									'state:'   .$this->input->post('state'),
									'country:'   .$this->input->post('country'),
									'websitelink:'   .$this->input->post('website_link'),
									'description:'   .$this->input->post('description'),

									);
			}

		else if($this->input->post('business_type') == 'Entertainment')
			{	

		 			$token   =  $this->session->userdata('token');	
		 			
				   	$header1 = array('token:'           .$token,
				   					'firstname:'        .$this->input->post('first_name'), 
									'lastname:'    .$this->input->post('last_name'), 
									'email:'     .$this->input->post('email'),
									'phone:'        .$this->input->post('phone'),	
									'businesstype:'       .$this->input->post('business_type'),	
									'category:'      .$this->input->post('entertainment_category'),
									'companyname:'   .$this->input->post('company_name'),
									'venue:' .$this->input->post('venue'),
									'address1:'   .$this->input->post('address1'),
									'address2:'   .$this->input->post('address2'),
									'zipcode:'   .$this->input->post('zipcode'),
									'state:'   .$this->input->post('state'),
									'country:'   .$this->input->post('country'),
									'websitelink:'   .$this->input->post('website_link'),
									'description:'   .$this->input->post('description'),

									);
			}
		   	 
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
	    	
	    	  	curl_setopt($ch1, CURLOPT_URL,'http://104.197.80.225:3010/wow/business/businessdetails');	   
		    	curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
		    	curl_setopt($ch1, CURLOPT_POST, true);
		    	curl_setopt($ch1, CURLOPT_POSTFIELDS, $wowtag_img); 	
		        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response1 = curl_exec($ch1); 	    	
		    	$data1 = json_decode($response1);
		        $id   =	 $data1->message->_id;
		        
		    	$this->session->set_userdata('id', $id);	
		     	curl_close($ch1);
		     	// print_r($data1);

		//second step business gallery

 			$token2   =  $this->session->userdata('token');	
 			
		   	$header2 = array('token:'           .$token2,
		   					'businessid:'        .$this->session->userdata('id'),
							'producttitle1:'    .$this->input->post('product_title1'), 
							'productheading1:'     .$this->input->post('product_heading1'),
							'productdescription1:'        .$this->input->post('product_description1'),	
							'producttitle2:'       .$this->input->post('product_title2'),	
							'productheading2:'      .$this->input->post('product_heading2'),
							'productdescription2:'   .$this->input->post('product_description2')
							
							);
		   	 
	       	$ch2 = curl_init();
       		      				    	
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
	
	    		$gallery_img = array('coverpage'  => @$product_img1,'businesslogo'  => @$product_video1);		    	 				
	    	
	    	  	curl_setopt($ch2, CURLOPT_URL,'http://104.197.80.225:3010/wow/business/businessgallery');	   
		    	curl_setopt($ch2, CURLOPT_HTTPHEADER,$header2);
		    	curl_setopt($ch2, CURLOPT_POST, true);
		    	curl_setopt($ch2, CURLOPT_POSTFIELDS, $gallery_img); 	
		        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	  	$response2 = curl_exec($ch2); 	    	
		    	$data2 = json_decode($response2);		      
		     	curl_close($ch2);
		     	// print_r($data2);

		// third step keyword search
		     	$this->rest->http_header('token',  $this->session->userdata('token'));

		    	$keyword = array( 		'businessid' 		       => $this->session->userdata('id'),
	    	  							'businesscoverageareas'     => $this->input->post('organisation_name'),	
	    	  							 'rankclientbase'   		 => $this->input->post('contact_persona_name'),
	    								 'businesssearchkeywords'   => $this->input->post('eventcontactphone')
	    								 								 
	    								 );		

	    	  	$json_data = json_encode($keyword); 
				$result = $this->rest->post('http://104.197.80.225:3010/wow/business/businesskeyword',$json_data,'json'); 	

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

	public function my_business_pageshow($id)
	{
		
		$this->rest->http_header('token',  $this->session->userdata('token'));
		$show_page = array('businessid' => $id);
		$json_data = json_encode($show_page); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/business/showparticularbusiness',$json_data,'json'); 	
		$data['business'] = $result->message;
		$this->load->view('business/ohp_admin_home', $data);

	}

	public function email_template()
	{
		$this->load->view('business/email_template');
	}

	public function web_mob_view()
	{
		$this->load->view('business/web_mob_view_template');
	}

}