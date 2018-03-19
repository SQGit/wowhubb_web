
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

public function grouphubb()
	{
		$this->load->view('friends/grouphubb');
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

public function create_group_page() 
	{
		$this->load->view('friends/creategroup');
	}

public function search_friendsold($search_val) //add search and friend request
   {
			   
			   	$this->rest->http_header('token', $this->session->userdata('token'));
			   	$search =array('search' => $search_val);
			   	$json_data = json_encode($search);
			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/friendsuggestion',$json_data,'json');
			  
			   	if($result->success)
					{	 
						 $response = $result->message;
						 echo '<ul class="live-search-list">';						
						 foreach ($response as $responses) {
						 	echo '<li><a href="#" data-id="'.$responses->_id.'" >'.$responses->firstname.'</a></li>';  //here add base url
						 }						 
						 echo '</ul>';

						 echo ' <script type="text/javascript">$("#display1 li a").on("click",  function(e){
								    e.preventDefault();
								    var name = $(this).text();	
								    var id = $(this).data("id");							   
								    $("#user_name option ").val(name);
								    $("#name_id").val(id);

									});
								</script>';
					}
				  else 
				   {	
						 echo 'failed';						 
				    }					

	}

public function search_friends() //add search and friend request
   {

				$user_id = $this->input->get('q'); 

			   	$this->rest->http_header('token', $this->session->userdata('token'));
			   	// $search_val =  str_replace("?","",$search_val );
			   	// echo $search_val;
			   	$search =array('search' => $user_id);
			   	$json_data = json_encode($search);
			   	$result = $this->rest->post('http://104.197.80.225:3010/wow/network/friendsuggestion',$json_data,'json');

			  
			   	$myJSON = json_encode($result);
			  
			   	echo $myJSON;
			  
			  

	}


public function create_group() 
	{

		$response = array(); 

		$this->rest->http_header('token', $this->session->userdata('token'));
		$group =array('groupname'  => $this->input->post('group_name'),	
						'users' 	=> $this->input->post('people_add'));
		$json_data = json_encode($group);
		$result = $this->rest->post('http://104.197.80.225:3010/wow/group/creategroup',$json_data,'json');
		print_r($result);
		
	}

}