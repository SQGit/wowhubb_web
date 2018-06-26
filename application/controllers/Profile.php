<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent ::__construct();
		 $this->load->helper(array('form','url'));
		 $this->load->library('session'); 
	}

	public function profile()
	{
		$this->load->view('profile/profile');
	}

	public function profile_thirdparty()
	{
		$this->load->view('profile/profile_thirdparty');
	}

	public function interest_thirdparty()
	{
		$this->load->view('profile/thirdparty_interest');
	}

	public function profile_eventfeed()
	{
		$this->load->view('profile/profile_eventfeed');
	}

	public function personal_update_overview() //personal overview  
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$profile_update = array('place' => $this->input->post('place'),
								'maritalstatus' =>$this->input->post('marital_status')
								);
		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profileoverview',$json_data,'json');		
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";
			
	 	}
	 	echo json_encode($response);

	}

public function personal_update_video() //personal self intro video
	{
		$response = array();
		$token =  $this->session->userdata('token');
		$header = array('token:'.$token);
		
		$ch = curl_init();		
		if(!empty($_FILES['self_video']['name']))

	       		{
		    		 $self_video = curl_file_create($_FILES['self_video']['tmp_name'],$_FILES['self_video']['type']);
		    	}else
		    		{
		    			
		    			$wowtag_video =""; 
		    		}

		    $profile_video = array('personalself' =>@$self_video);
									
		    curl_setopt($ch, CURLOPT_URL,'http://104.197.80.225:3010/wow/user/personalself');	   
	    	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	    	curl_setopt($ch, CURLOPT_POST, true);
	    	curl_setopt($ch, CURLOPT_POSTFIELDS, $profile_video); 	
	    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //don't print automatic response   
	    	$result = curl_exec($ch); 
			$data =json_decode($result);
			
			// print_r($result);
		if($data->success)
	 	{
	 		$response['status'] = "success";	 			
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}

	public function personal_update_aboutme() //personal about me
	{
		
		$this->rest->http_header('token', $this->session->userdata('token'));

		$profile_update = array('aboutme' 	=>$this->input->post('about_me'),
								'quote' 	=>$this->input->post('favorite_quote'),
								'birthday' 	=>$this->input->post('birthday'),
								'religion' 	=>$this->input->post('religion'),
								'language' 	=>$this->input->post('language')					
								);

		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profileaboutme',$json_data,'json');

		if($result->success == true)
	 	{
	 			
	 		$this->session->set_userdata('birthday', $result->message->birthday); 
	 		redirect('profile/profile_get');		
	 	}
	 	else
	 	{
	 		echo "Something Went Wrong";		
	 	}
	 

	}

	public function personal_update_relationship()  //personal relationship
	{

		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));

			
		   	$personal_relation = array (	   								
		   			 						'relationshipstatus' =>  $this->input->post('relation_type'),
		   			 						'relationshipwith'   =>  $this->input->post('relation_name')			 						
		   			 					);	   				 
		   		
		    $json_data = json_encode($personal_relation); 
		   	$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updaterelationshipstatus',$json_data,'json');	
		   
		    if($result->success == true)
			 	{
			 		$response['status'] = "success";	 		
			 	}
			 	else
			 	{
			 		$response['status'] = "failed";			
			 	}

			echo json_encode($response);
	}

public function personal_update_contactinfo() //personal contact info
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));

		$profile_update = array('country' 	  => $this->input->post('country'),
								'state' 	  => $this->input->post('state'),
								
								);

		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profilecontact',$json_data,'json');	


		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}

public function your_life_view() //personal event info
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$profile_update = array('birthday' 	=> $this->input->post('birthday'),
								'gender'	=> $this->input->post('gender'));								
								
		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profileinfo',$json_data,'json');
			
			
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	
	 		$this->session->set_userdata('gender', $result->message->gender); 	
	 		$this->session->set_userdata('birthday', $result->message->birthday);	
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}


public function profile_get()  //all update personal profile data get here
	{
		$this->rest->http_header('token', $this->session->userdata('token'));
		$json_data = array(); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/getpersonalprofile',$json_data,'json');


		$data['profile'] = $result->message;

		if(isset($result->message->personalself))
		{	
			$data['video'] = $result->message->personalselfurl;	
			$this->session->set_userdata('self_video',$data['video']);	
		}

		if(isset($result->message->personalimageurl))
		{
		 	$data['img'] = $result->message->personalimageurl;
		 	$this->session->set_userdata('personal_image', $data['img']);
		}

		if(isset($result->message->personalcoverurl))
		{
		 	$data['cover'] = $result->message->personalcoverurl;
		 	$this->session->set_userdata('cover_img', $data['cover']);
		}

		$this->friends_count();	
		$data['frds_count'] = $this->friends_count();
		
 	    $this->load->view('profile/profile', $data);
	}

public function friends_count() //friends count
{
	$this->rest->http_header('token', $this->session->userdata('token'));

	$data =array();
	$json_data = json_encode($data);
	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/friendscount',$json_data,'json');

	if($result->success == true)
			   	  	{	
				   	   $data['frds_count'] = $result->message;
				   	   return $data['frds_count'];  //here variable send to add_friends
			   	   	} 
}

public function friends_connection()
{
	$this->rest->http_header('token', $this->session->userdata('token'));

	$data =array();
	$json_data = json_encode($data);
	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/myfriends',$json_data,'json');
	$data['friend'] = $result->message;

	$this->friends_count();	
	$data['frds_count'] = $this->friends_count();

	$this->load->view('profile/profile_friends',$data);
}

public function professional_professionalskills()
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
	
		$professional_skills= array(	   								
		   			 			'professionalskills' =>  $this->input->post('professional_skills[]')
		   			 		);	   				 
		   		
		$json_data = json_encode($professional_skills); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updateprofessionalskills',$json_data,'json');
		
		// $res =$this->rest->debug();
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}	


public function professional_certificate()
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$cer_count = count($this->input->post('Certificate')); 
		$certification = array();

		   	for($i=0; $i<$cer_count; $i++)
		   			{	   				
		   				array_push($certification, array
		   					(	   								
		   			 			'certification' =>  $this->input->post('Certificate')[$i],
		   			 			'year'   		=>  $this->input->post('year')[$i] 			 						
		   			 		));	   				 
		   			}

		   	$professional_update = array('certification' => $certification); 
				
			$json_data = json_encode($professional_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updateprofessionalprofile',$json_data,'json');
		
		// $res =$this->rest->debug();
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}	

public function professional_college()
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$college_count = count($this->input->post('college')); 
		$college = array();

		   	for($i=0; $i<$college_count; $i++)
		   			{	   				
		   				array_push($college, array
		   					(	   								
		   			 			'college' => $this->input->post('college')[$i],
		   			 			'degree'    => $this->input->post('degree')[$i], 
		   			 			'field'    => $this->input->post('field_of_study')[$i], 
		   			 			'grade'    => $this->input->post('grade')[$i], 
		   			 			'from'    => $this->input->post('from_year')[$i], 
		   			 			'to'      => $this->input->post('to_year')[$i],	
		   			 			'description' => $this->input->post('description')[$i]		 						
		   			 		));	   				 
		   			}

		   	$professional_college = array('college' => $college); 
				
			$json_data = json_encode($professional_college); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updatecollegedetails',$json_data,'json');
		
		
		// $res =$this->rest->debug();
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);

	}	

// professional work experience

public function professional_work_exp()  
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));

		$exp_count = count($_POST['title']); 
		$profesional_exp = array();

		   	for($i=0; $i<$exp_count; $i++)
		   			{	   				
		   				array_push($profesional_exp, array
		   					(	   								
		   			 			'title' 	   => $this->input->post('title')[$i],
								'company' 	   => $this->input->post('company')[$i],
								'location'     => $this->input->post('location')[$i],								
								'fromyear'     => $this->input->post('from_year')[$i],								
								'toyear'       => $this->input->post('to_year')[$i],
								'description'  => $this->input->post('description')[$i],
										 						
		   			 		));	   				 
		   			}	
		$work_exp = array('workexperience' => $profesional_exp); 	   
		
		$json_data = json_encode($work_exp); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updateworkexperience',$json_data,'json');
		
		
		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);
	}	

function profile_img_upload() //working for image upload
    {
		    $token =  $this->session->userdata('token');
		   	$header = array('token:'.$token);
	       	$ch = curl_init();
       	
	    	$cfile = curl_file_create($_FILES['profile_img']['tmp_name'],$_FILES['profile_img']['type']);
	    	 
	    	$data = array('personalimage' => @$cfile);
	    	curl_setopt($ch, CURLOPT_URL,'http://104.197.80.225:3010/wow/user/personalimage');
	    	 
	    	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	    	curl_setopt($ch, CURLOPT_POST, true);
	    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	    	  
	    	$response = curl_exec($ch);  
	    	echo curl_error($ch);
	    	

	} 

//upload  for cover image
function cover_img_upload() 
{
		$token =  $this->session->userdata('token');
		$header = array('token:'.$token);
	    $ch = curl_init();
       	
	    $cfile = curl_file_create($_FILES['cover_img']['tmp_name'],$_FILES['cover_img']['type']);
	    	 
	    $data = array('personalcover' => @$cfile);
	    curl_setopt($ch, CURLOPT_URL,'http://104.197.80.225:3010/wow/user/personalcover');
	    	 
	    curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	    	  
	    $response = curl_exec($ch);  
	    echo curl_error($ch);

} 
			
function video_upload() //working for image upload
   	{
		     $token =  $this->session->userdata('token');
		   	 $header = array('token:'.$token);

	       	 $ch = curl_init();
       	
	    	 $cfile = curl_file_create($_FILES['video']['tmp_name'],$_FILES['video']['type']);
	    	 
	    	 $data = array('personalcover' => @$cfile);
	    	 curl_setopt($ch, CURLOPT_URL,'http://104.197.80.225:3010/wow/user/personalcover');
	    	 
	    	 curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	    	  curl_setopt($ch, CURLOPT_POST, true);
	    	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	    	  
	    	  $response = curl_exec($ch);  
	    	  echo curl_error($ch);
	}	

public function profile_thirdparty_view($id)
	{
	   		
	   	$this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		$data = array('userid' =>  $id);
		$json_data = json_encode($data); 
		   	 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/getthirdpartyprofile',$json_data,'json');

		$data['profile_info'] = $result->message;
		$this->load->view('profile/profile_thirdparty', $data);
		 
	}		

public function email_enable($textkey)
	{
		$response = array(); 
	   	$this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		$data = array('emailvisible' =>  $textkey);
		$json_data = json_encode($data); 
		   	 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updateemailvisible',$json_data,'json');


		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);
	}

public function phone_enable($textkey)
	{
		$response = array(); 
	   	$this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		$data = array('phonevisible' =>  $textkey);
		$json_data = json_encode($data); 
		   	 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updatephonevisible',$json_data,'json');

		if($result->success == true)
	 	{
	 		$response['status'] = "success";	 		
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";			
	 	}
	 	echo json_encode($response);
	}

}




?>