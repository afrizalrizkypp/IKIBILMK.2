<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');

		$this->load->helper('url');

	 // if($this->session->userdata('status') != "sucsess"){
		   redirect(base_url("login/index"));
	}
}

	public function index(){
		$data = array(

			'join' => $this->user_model->get_user_list()	
		);

		$this->load->view('Admin/template/user/VA_User', $data);
	}



}