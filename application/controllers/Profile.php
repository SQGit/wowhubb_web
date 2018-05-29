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
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));

		$profile_update = array('aboutme' 	=>$this->input->post('about_me'),
								'quote' 	=>$this->input->post('favorite_quote'),
								'birthday' 	=>$this->input->post('birthday'),
								'religion' 	=>$this->input->post('religion'),
								'language' 	=>$this->input->post('language')					
								);

		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profileaboutme',$json_data,'json');

		// print_r($json_data);	
		
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

	public function personal_update_relationship()  //personal relationship
	{

		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));

			$relation_count = count($this->input->post('relation_name')); 
		   	$personal_relation = array();

		   	for($i=0; $i<$relation_count; $i++)
		   			{	   				
		   				array_push($personal_relation, array
		   								(	   								
		   			 						'name'    	 =>  $this->input->post('relation_name')[$i],
		   			 						'relation'   =>  $this->input->post('relation_type')[$i] 			 						
		   			 					));	   				 
		   			}

		   	$relation = array('relationship' => $personal_relation); 

		    $json_data = json_encode($relation); 
		   	$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updaterelationship',$json_data,'json');	
		   
		   	 // print_r($result);
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
								'sociallinks' => $this->input->post('social_link[]')	
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

public function personal_update_eventinfo() //personal event info
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$profile_update = array('wedding' =>$this->input->post('wedding'),
								'socialfunction' =>$this->input->post('social_function'),
								'parties' =>$this->input->post('party')	
								);
		$json_data = json_encode($profile_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/profileinfo',$json_data,'json');	
		// print_r($result);	
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


public function profile_get()  //all update personal profile data get here
	{
		$this->rest->http_header('token', $this->session->userdata('token'));
		$json_data = array(); 
		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/getpersonalprofile',$json_data,'json');


		$data['profile'] = $result->message;

		if(isset($result->message->personalself))
		{	
			$data['video'] = $result->message->personalself;	
			$this->session->set_userdata('self_video',$data['video']);	
		}

		if(isset($result->message->personalimage))
		{
		 $data['img'] = $result->message->personalimage;
		 $this->session->set_userdata('image', $data['img']);
		}

		if(isset($result->message->personalcover))
		{
		 $data['cover'] = $result->message->personalcover;
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


public function professional_update()
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$professional_update = array('designation' => $this->input->post('designation'),
								'education' =>$this->input->post('college[]'),
								'workplace' =>$this->input->post('work_place'),
								'certification' =>$this->input->post('certificates[]'),
								'volunteer' =>$this->input->post('awards[]')						
								);
		$json_data = json_encode($professional_update); 

		$result = $this->rest->post('http://104.197.80.225:3010/wow/user/updateprofessionalprofile',$json_data,'json');
		// print_r($result);
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
											'frommonth'    => $this->input->post('from_month')[$i],
											'fromyear'     => $this->input->post('from_year')[$i],
											'tomonth'      => $this->input->post('to_month')[$i],
											'toyear'       => $this->input->post('to_year')[$i],
											'description'  => $this->input->post('description')[$i],
											'link'         => $this->input->post('link')[$i]			 						
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

function cover_img_upload() //working for image upload
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
	   		// $response = array(); 
	   		 $this->rest->http_header('token', $this->session->userdata('token'));		   		   	
		  	 $data = array('userid' =>  $id);
		   	 $json_data = json_encode($data); 
		   	 
		   	 $result = $this->rest->post('http://104.197.80.225:3010/wow/user/getthirdpartyprofile',$json_data,'json');

		   	  // print_r($result);
		   	 $data['profile_info'] = $result->message;
		   	 $this->load->view('profile/profile_thirdparty', $data);
		 
		}		


}




?>