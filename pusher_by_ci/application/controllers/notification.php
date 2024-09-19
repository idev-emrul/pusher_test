<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		echo "Notification test";
		// $this->load->view('welcome_message');
	}

	public function createNotification(){
		// echo ('test');
		$this->load->view('createNotification');
	}

	public function notificationAdd(){
		$form_data = $this->input->post();
		pre($form_data);
	}

	
}
