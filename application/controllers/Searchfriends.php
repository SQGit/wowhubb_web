
<?php

class Searchfriends extends CI_Controller
{
	public function __construct()
	{
		  parent:: __construct();
		 $this->load->library('session'); 
		 $this->load->helper(array('form','url'));
	}
	public function searching_friends()
	{
		$this->load->view('friends/search_friends');
	}

	public function add_friends() //find friend request
	{		
		
		$this->rest->http_header('token', $this->session->userdata('token'));
				$search ='search=';	//keyword for db and empty values to pass			   	
			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/friendsuggestion',$search);		
			   	// print_r($result);	   
		 $data['friend'] = $result->message; 
		 // $data['accept'] = $result->message->status; 
		$this->load->view('serviceprovider/add_friends',$data);
	}
	
	public function send_request($request_id) //send request
	{
		$response = array(); 
		$this->rest->http_header('token', $this->session->userdata('token'));
		$request =array('userid' => $request_id);
		$json_data = json_encode($request);
		$result = $this->rest->post('http://104.197.80.225:3010/wow/network/sendrequest',$json_data,'json');
		// print_r($result);
		if($result->success)
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $result->message;
			}
		else 
		    {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }

		echo json_encode($response);
	}

	public function accept_request($accept_id) //accept request
	{
		$response = array(); 
		$this->rest->http_header('token', $this->session->userdata('token'));
		$accept =array('userid' => $accept_id);
		$json_data = json_encode($accept);
		$result = $this->rest->post('http://104.197.80.225:3010/wow/network/acceptrequest',$json_data,'json');
		// print_r($result);
		if($result->success)
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $result->message;
			}
		  else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }
			echo json_encode($response);
	}

public function decline_request($decline_id) //decline request
	{
		$response = array(); 
		$this->rest->http_header('token', $this->session->userdata('token'));
		$decline =array('userid' => $decline_id);
		$json_data = json_encode($decline);
		$result = $this->rest->post('http://104.197.80.225:3010/wow/network/declinerequest',$json_data,'json');
		// print_r($result);
		if($result->success)
			{		 
				 $response['status'] = 'success'; 
				 $response['message'] = $result->message;
			}
		  else 
		   {	
				 $response['status'] = 'failed';
		 	 	 $response['message'] = $result->message;
		    }
			echo json_encode($response);
	}

public function create_group() 
	{
		$this->load->view('friends/creategroup');
	}

}