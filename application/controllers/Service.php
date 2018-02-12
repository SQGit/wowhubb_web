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
		$this->load->view('mytest/dynamic_tab');
	}

	public function service_provider()
	{
		$this->load->view('serviceprovider/event_serviceprov_landing');
	}

	public function service_provider_form()
	{
		$this->load->view('serviceprovider/event_serviceprov_form');
	}

	
	public function event_hubb()
	{
		$this->load->view('serviceprovider/event_hubb');
	}
	
	public function eventvenue_landing()
	{
		$this->load->view('serviceprovider/event_venue_landing');
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


	

}	