<?php
	
class Home extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		 $this->load->library('session'); 
		 $this->load->helper(array('form','url'));
	}

	
	//otp first page load here
	 public function index()
	 {
	 	$this->load->view('registration');
	 }

	  public function otp()
	 {
	 	$this->load->view('otp_verify');
	 }

	  public function otp_page()
	 {
	 	$this->load->view('otp');
	 }
	 //OTP verification 

	public function otp_verify()
	 {
	 	$response = array();
	 	$radio_button = $this->input->post('group1');
	 	//$country_code = $this->input->post('group1_PhoneText');
	 	$pho_no = $this->input->post('pho_no');
	 	$email  = $this->input->post('group1_EMailText');

	 	if($radio_button == 'pho_no' ) //radio button value is pho_no
	 	 {

	 	 	$phone_number = array('tonumber' => $this->input->post('pho_no'));
		 	$data['number'] =$this->input->post('pho_no'); //send phone no to login page
		 	$json_data = json_encode($phone_number);

		 	$result = $this->rest->post('http://104.197.80.225:3010/wow/otp',
		 		$json_data ,'json');
		 	// $original_otp= $result->otp;
			// $res = $this->rest->debug();   	
		 	// $this->session->set_userdata('original_otp',$result->otp);

		 	$this->load->view('otp_verify', $data);

	 	}

	 	else if($radio_button == 'email' )
	 	 {
	 	 	$email = array('toemail' =>$this->input->post('group1_EMailText'));
	 	 	$json_data = json_encode($email);
	 	 	$data['number'] = $this->input->post('group1_EMailText');
	 	 	$result = $this->rest->post('http://104.197.80.225:3010/wow/mailotp',
	 		$json_data ,'json');
	 		
	 		// $original_otp= $result->otp;
	 		// $this->session->set_userdata('original_otp',$original_otp);
	 		$this->load->view('otp_verify', $data);
	 	 }

	 	 echo json_encode($response);
	 }

	

	 //load otp form here

	 public function otp_auth()
	 {
	 	
	 	$this->load->view('otp_verify');
	 }

	 public function registration()
	 {
	 	$this->load->view('registration');
	 }

	//registration form load verify
public function reg_load()
	{		
		
		$response = array();

		$user_data = array('firstname' => $this->input->post('firstname'),
    						'lastname' => $this->input->post('lastname'),	
    						'wowtagid' => '!'.$this->input->post('wowtagid'),
    						'phone'    => $this->input->post('pho_no'),
    						'password' => $this->input->post('password'),
    						'email'	   => $this->input->post('Email'),
    						'password' => $this->input->post('password'),
    						'gender'   => $this->input->post('gender'),
    						// 'birthday' => $this->input->post('birthday'));
    						'birthday' => $this->input->post('year'). "-".$this->input->post('month')."-".$this->input->post('day'));
    		    		
		$json_data = json_encode($user_data);

		$result = $this->rest->post('http://104.197.80.225:3010/wow/signup',$json_data,'json');
		
		// print_r($mail) ;		 
		if(isset($result->success) && ($result ->success == true))
		{
		 	 $response['status'] = 'success'; 
			 $response['message'] = $result->message;
			 // $this->session->set_userdata('email', $result->email);
			 // $this->session->set_userdata('phone', $result->phone);
		}

		else 
		{	
			 $response['status'] = 'failed';
	 	 	 $response['message'] = $result->message;

		}
			echo json_encode($response);		
	}

	public function wowtag() //validate wowtag id
	 {
	 	$response = array();
	 	$user_data = array('tagid' => '!'. $this->input->post('wowtag'));	 	
	 	$json_data = json_encode($user_data);	 	
	 	$result = $this->rest->post('http://104.197.80.225:3010/wow/checktagid',$json_data,'json');
	 	// print_r($result);
	 	//  $res = $this->rest->debug(); 
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
	 

	 //load otp form here
	 public function login()
	 {
	 	
	 	$this->load->view('login');
	 }
	 //login page verify with database
	
	public function login_auth()
		{
			$response = array();

			$phone = $this->input->post('phone');

			if(is_numeric($phone))
			{

				// echo $phone;
				$phone_number = array(
		 								'phone' => $this->input->post('phone'),
		 								'password' => $this->input->post('password'));
				 						
	 			$json_data = json_encode($phone_number);
	 			$result = $this->rest->post('http://104.197.80.225:3010/wow/login', $json_data, 'json');
	 			// print_r($result );	 			

				   if(isset($result->success) && ($result ->success == true))
				 	{
				 		$this->session->set_userdata('token', $result->token);
				 		$this->session->set_userdata('email', $result->user->email);
				 	 	$this->session->set_userdata('phone', $result->user->phone);
				 	 	$this->session->set_userdata('firsttime', $result->user->firsttime);
				 		$this->session->set_userdata('first_name', $result->user->firstname);
				 		$this->session->set_userdata('last_name', $result->user->lastname);		 	
				 		$this->session->set_userdata('wowtag', $result->user->wowtagid);

				 		if(isset($result->user->personalimage))	
				 		{
			 				$this->session->set_userdata('personal_image', $result->user->personalimage);
			 			}

			 			if(isset($result->user->personalself))	
				 		{
			 				$this->session->set_userdata('self_video', $result->user->personalself);
			 			}

			 			if(isset($result->user->designation))	
				 		{
			 				$this->session->set_userdata('designation', $result->user->designation);
			 			}

			 			if(isset($result->user->business))	
				 		{
			 				$this->session->set_userdata('business', $result->user->business);
			 			}

				 		$response['status'] = "success";
				 		$checking = $this->login_check(); //this is login_check for first time function
				 		$response['redirect_url'] = $checking;						
				 	}

				 else if(isset($result->message) && ($result->message =='Otp verification is must'))
			 		
			 		{

				 		$email = $this->input->post('phone');
				 		$password = $this->input->post('password');

				 		// print_r($email);

				 		$this->session->set_userdata('email', $email);
				 	    $this->session->set_userdata('password', $password );

				 	   
				 			$phone_number = array('tonumber' => $this->input->post('phone'),
				 							      'password' => $this->input->post('password'));

			 			 		 			
			 				$json_data = json_encode($phone_number);

			 				$result = $this->rest->post('http://104.197.80.225:3010/wow/otp', $json_data ,'json');

			 				$response['status'] = "failed";	
				 		
				 	}				 

				 	else 
				 	{
				 		$response['status'] = "false";						
				 	}
			}


			else
			{
				 $email = array('email' => $this->input->post('phone'),
								'password' => $this->input->post('password'));	

			 	$json_data = json_encode($email);
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/emaillogin', $json_data,'json');


			 	// print_r($result);
			 	// $res = $this->rest->debug(); 

			 	if(isset($result->success) && ($result ->success == true))
				{
			 		$this->session->set_userdata('token', $result->token);
			 		$this->session->set_userdata('email', $result->user->email);
			 	 	$this->session->set_userdata('phone', $result->user->phone);
			 	 	$this->session->set_userdata('firsttime', $result->user->firsttime);		 	
			 	 	$this->session->set_userdata('first_name', $result->user->firstname);
				 	$this->session->set_userdata('last_name', $result->user->lastname);	
				 	$this->session->set_userdata('wowtag', $result->user->wowtagid);

				 	if(isset($result->user->personalimage))	
				 	{
			 			$this->session->set_userdata('personal_image', $result->user->personalimage);
			 		}

			 		if(isset($result->user->personalself))	
				 		{
			 				$this->session->set_userdata('self_video', $result->user->personalself);
			 			}

			 		if(isset($result->user->designation))	
				 		{
			 				$this->session->set_userdata('designation', $result->user->designation);
			 			}

			 		if(isset($result->user->business))	
				 		{
			 				$this->session->set_userdata('business', $result->user->business);
			 			}

			 			$response['status'] = "success";
				 		$checking = $this->login_check();    //this is login_check function
				 		$response['redirect_url'] = $checking;					 					
			 	}
			 	
			 	else if(isset($result->message) && ($result->message =='Otp verification is must'))
			 	{
			 		$email = $this->input->post('phone');
			 		$password = $this->input->post('password');

			 		$this->session->set_userdata('email', $email);
			 	    $this->session->set_userdata('password', $password );

			 	    // print_r($email);

			 			$email = array('toemail' => $this->input->post('phone'),
			 						   'password' => $this->input->post('password'));
			 			 
		 			 		 			
		 				$json_data = json_encode($email);

		 				$result = $this->rest->post('http://104.197.80.225:3010/wow/mailotp', $json_data ,'json');		 				
		 				
			 			$response['status'] = "failed";	
			 		
			 	}

			 	else
			 	{
			 		$response['status'] = "false";	
			 	}

			}
			// print_r($result);
				echo json_encode($response);
		}



	public function login_check() //login first time page redirect checking
		 {
			 	$first_time = $this->session->userdata('firsttime');
			 	// print_r($first_time);
			 	
			 	if($first_time == "true")
			 	{			 		
			 		return "home/firsttime_interest";
			 		// return "home/interest_page";
			 		// $this->load->view('interest_page');
			 	}
			 	else
			 	{
			 		return  "event/get_eventfeed";
			 		// $this->load->view('event/eventfeed');
			 	}
		 }

	//opt validation 

	public function otp_validation()
	 	{
	 		// echo "testing";
	 		$response = array();

	 		if(is_numeric($this->input->post('email')))
	 		{

			 	$otp_verify = array('phone' => $this->input->post('email'),
			 						'password' => $this->input->post('password'),
			 					    'otp'  =>   $this->input->post('otp')  );
			 	
			 	$json_data = json_encode($otp_verify);
			 	// print_r($json_data);
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/verifyotp',
		 		$json_data ,'json');

			 	if($result->success == true)
			 	{
			 		 $response['status'] = 'success'; 
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 	}
	 		}

	 		else
	 		{	

			 	$otp_verify = array('email'    => $this->input->post('email'),
			 						'password' => $this->input->post('password'),
			 					    'otp'      =>   $this->input->post('otp')  );
			 	
			 	$json_data = json_encode($otp_verify);
			 	
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/verifyotp',
		 		$json_data ,'json');
		 		// print_r($result);

			 	if($result->success == true )
			 	{
			 		 $response['status'] = 'success'; 
			 		 $this->session->set_userdata('token', $result->token);
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 	}
			}

	 	echo json_encode($response);
	 }


	public function forgot()
	 {
	 	$this->load->view('forgot');
	 }

	 public function forgot_newpass()
	 {
	 	$this->load->view('forgot_pass_otp');
	 }

	public function forgot_validate()   //check email or phone valid and send otp
	 {
	 		$response = array();

	 		$email_phone = $this->input->post('email_phone');
	 	
	 		if(is_numeric($this->input->post('email_phone')))
	 		{

			 	$pass_verify = array('phone' => $this->input->post('email_phone'));

			 	$json_data = json_encode($pass_verify);
			 	// print_r($json_data);
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/forgetpassword',
		 		$json_data ,'json');

			 	if($result->success == true )
			 	{
			 		 $response['status'] = 'success'; 
			 		 $this->session->set_userdata('email_phone' ,$email_phone);
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 		$response['message'] = $result->message;
			 	}
		 		
			 
	 		}

	 		else
	 		{	

			 	$pass_verify = array('email' => $this->input->post('email_phone'));					
			 	
			 	$json_data = json_encode($pass_verify);			 	
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/forgetpassword',
		 		$json_data ,'json');
		 		// print_r($result);
			 	
			 	if($result->success == true )
			 	{
			 		 $response['status'] = 'success'; 
			 		$this->session->set_userdata('email_phone' ,$email_phone);
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 		$response['message'] = $result->message;
			 	}
			}

			echo json_encode($response);
	 	
	 }

	 public function forget_new_pass() //change new password 
	 {
	 	$response = array();

	 	$email_phone = $this->input->post('email_phone');
	 	
	 		if(is_numeric($this->input->post('email_phone')))
	 		{

			 	$newpass_verify = array('phone' => $this->input->post('email_phone'),
			 						 'otp' => $this->input->post('otp'),
			 						 'newpassword' => $this->input->post('new_pass')
			 						);

			 	$json_data = json_encode($newpass_verify);
			 	// print_r($json_data);
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/changepassword',
		 		$json_data ,'json');

		 		if($result->success == true )
			 	{
			 		 $response['status'] = 'success'; 
			 		
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 		$response['message'] = $result->message;
			 	}
			 
	 		}

	 		else
	 		{	

			 	$newpass_verify = array('email' => $this->input->post('email_phone'),
			 						 'otp' => $this->input->post('otp'),
			 						 'newpassword' => $this->input->post('new_pass')
			 						);

			 	$json_data = json_encode($newpass_verify);
			 	
			 	$result = $this->rest->post('http://104.197.80.225:3010/wow/changepassword',
		 		$json_data ,'json');
		 		// print_r($json_data);
		 		if($result->success == true )
			 	{
			 		 $response['status'] = 'success'; 
			 		
			 	}
			 	else
			 	{
			 		$response['status'] = 'failed';
			 		$response['message'] = $result->message;
			 	}

		 		// $this->load->view('login');
			}
			echo json_encode($response);
	 }

	 //load interest page here
	 public function interest_page()
	 {		 	
	 	// if(is_null($this->session->userdata('email')))
	 	// { 	
	 	// $this->load->view('login');
	 	// }
	 	// else
	 	// {
	 		$this->load->view('interests');
	 	// }
	 }

	 //interest store in database

	public function interest_load()
	 {
	 	
		$this->rest->http_header('token', $this->session->userdata('token'));
	 	$response = array();

	 	$inter = array('interests' => $this->input->post('img1'));
		
	 	$json_data = json_encode($inter);

	 	// print_r($json_data);

	 	$result = $this->rest->post('http://104.197.80.225:3010/wow/event/updateinterests', $json_data , 'json');
	 	// $res = $this->rest->debug();   
	 	//  print_r($res);
	 	if($result->success == true)
	 	{
	 		$response['status'] = "success";
			// $response['message'] = $result->message;
	 	}
	 	else
	 	{
	 		$response['status'] = "failed";
			// $response['message'] = $result->message;
	 	}
	 	echo json_encode($response);
	 }

	public function firsttime_interest()
	{
			$this->rest->http_header('token', $this->session->userdata('token'));		
			$json_data = array(); 
			$result = $this->rest->post('http://104.197.80.225:3010/wow/event/getinterests',$json_data,'json');
		 // redirect('home/interest_load');
		// $res = $this->rest->debug();  		
	 	 	$this->load->view('interests');
	}

	public function interest_get()
		{
		
			$this->rest->http_header('token', $this->session->userdata('token'));		
			$json_data = array(); 
			$result = $this->rest->post('http://104.197.80.225:3010/wow/event/getinterests',$json_data,'json');
			// $res = $this->rest->debug();  
		 	$data= $result->message->interests;
		 	$data['interest'] = implode(",", $data); //here array to string convertion
	 	 	$this->load->view('profile/profile_interest', $data);
	 	}
	
	 public function interest_update()
	{
		$response = array();
		$this->rest->http_header('token', $this->session->userdata('token'));
		$inter = array('interests' => $this->input->post('img1'));

		$json_data = json_encode($inter);
		$result = $this->rest->post('http://104.197.80.225:3010/wow/event/updateinterests', $json_data , 'json');
		// print_r($result);
		// $res = $this->rest->debug(); 
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

	public function logout()
	{
		 $this->session->sess_destroy();
       	 redirect('home/login');
	}


}
	


?>