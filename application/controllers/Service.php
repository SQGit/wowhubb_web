<?php
	
class Service extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		 $this->load->library('session'); 
		 $this->load->helper(array('form','url'));
	}

	public function test()
	{
		$this->load->view('mytest/search');
	}

	

	public function service_provider_landing()
	{
		$this->load->view('serviceprovider/service_provider_landing_withoutlogin');
	}

	public function service_provider_form()
	{
		$this->load->view('serviceprovider/event_serviceprov_form');
	}

	
	// public function event_hubb()
	// {
	// 	$this->load->view('serviceprovider/event_hubb');
	// }
	
	public function eventvenue_landing()
	{
		$this->load->view('serviceprovider/event_venue_landing');
	}

	public function eventvenue_landing_without()
	{
		$this->load->view('serviceprovider/event_venue_landing_withoutlogin');
	}

	public function eventvenue_business()
	{
		$this->load->view('serviceprovider/event_venue_business');
	}

	public function eventvenue_admin()
	{
		$this->load->view('serviceprovider/event_venue_admin');
	}

	public function eventvenue_form()
	{
		$this->load->view('serviceprovider/event_venue_form');
	}

	public function event_serviceprov_landing_ins()   //service provider image load to details
	{
		$this->load->view('serviceprovider/event_serviceprov_landing_ins');
	}

	public function event_serviceprov_landing_details()   //service provider image load to details
	{
		$this->load->view('serviceprovider/event_serviceprov_landing_withoutlogin');
	}

	public function create_business_page()   //create business page show in register page 
	{
		$this->load->view('serviceprovider/create_buss_page');
	}

	public function event_serviceprovider_3rd_party()   //event service provider 3rd party view 
	{
		$this->load->view('serviceprovider/event_serviceprov_3rd_party');
	}

	public function event_venue_business()   
	{
		$this->load->view('serviceprovider/event_venue_business');
	}

    public function event_venue_admin_eventhall()   
	{
		$this->load->view('serviceprovider/event_venue_admin_eventhalls');
	}

	public function ohp_admin_home()   
	{
		$this->load->view('serviceprovider/ohp_admin_home');
	}

	public function ohp_eventhosting_form()   
	{
		$this->load->view('serviceprovider/ohp_eventhosting_form');
	}

	public function ohp_wowtag()   
	{
		$this->load->view('serviceprovider/ohp_wowtag');
	}

	public function ohp_eventfeed()   
	{
		$this->load->view('serviceprovider/ohp_eventfeed');
	}

	public function ohp_publish_event()   
	{
		$this->load->view('serviceprovider/ohp_publish_event');
	}

	public function ohp_notification_page()   
	{
		$this->load->view('serviceprovider/ohp_notification_page');
	}

	public function ohp_network_members()   
	{
		$this->load->view('serviceprovider/ohp_network_members');
	}

	public function ohp_admin_members_admin()   
	{
		$this->load->view('serviceprovider/ohp_admin_members_admin');
	}

}	