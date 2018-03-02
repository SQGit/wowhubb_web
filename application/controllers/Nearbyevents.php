<?php
	
class Nearbyevents extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		 $this->load->library('session'); 
		 $this->load->helper(array('form','url','date'));		 

	}

// get my own wowtag video
public function get_wowtag_video()  
	{ 
		      	
	   			 $this->rest->http_header('token', $this->session->userdata('token'));
			   	  $data = array();
			   	  $json_data = json_encode($data); 
			   	  $result = $this->rest->post('http://104.197.80.225:3010/wow/event/myfeeds',$json_data,'json');	   	 
			   	  $data['wowtagvideo'] = $result->message;	   	    	   	 
				 // print_r($result);
				 $this->load->view('nearbyevent/wowtag', $data);
		 	
	}

// delete personal  event from db
public function delete_wowvideo()
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

public function nearby_event()
	{
		$this->load->view('nearbyevent/nearby_events_landing');
	}

// get nearby event location pass by google map
public function nearby_event_service()
	{
			$this->rest->http_header('token',  $this->session->userdata('token'));

	    	  	$event_location = array('location'        => $this->input->post('current_city'),
	    							    'eventcategory'   => $this->input->post('event_category')
	    								 							 
	    								 );		

	    	  	$json_data = json_encode($event_location); 
				$result = $this->rest->post('http://104.197.80.225:3010/wow/event/getnearbyevents',$json_data,'json');				

				$data['nearbyevent'] = $result->message;
				$this->load->view('nearbyevent/nearby_events_landing',$data);
	}

//using form submit near by events details
public function get_nearbyevent_details() 
	{
           $name= $_POST['details'];
           $json = json_decode($name);
           $result['event'] = $json;        
           // print_r($result['event']);			
		   $this->load->view('nearbyevent/nearbyevent_details', $result);
 	}	  
	   
}