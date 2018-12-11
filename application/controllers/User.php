<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();

		//load global model_user same controller
		$this->load->model('model_user');
	}

	public function ftp()
	{
		$this->load->library('ftp');

		$config['hostname'] = '192.168.79.120';
		$config['port'] = '21';
		$config['username'] = 'support';
		$config['password'] = 'Blueisgood2001';
		$config['debug']        = TRUE;

		$this->ftp->connect($config);

		// $list = $this->ftp->list_files('/autoftp/');

		// print_r($list);

		$this->ftp->close();
	}

	public function index()
	{
		//set active nav menu
		$init['aktif'] 	= 'index';

		//get data from db
		$data['user']	= $this->model_user->selectall();

		//init view
		$page['main'] 	= $this->load->view('main', $data, true);
		$page['navbar'] = $this->load->view('master/navbar', $init, true);
		$page['sidebar']= $this->load->view('master/sidebar', '', true);

		$this->load->view('master/master', $page);
	}

	public function insert(){
		//get all input post
		$data = $this->input->post();

		if ($data) {
			//insert
			$response = $this->model_user->insert($data);
		}
		redirect();
	}

	public function update($id = null){
		$data = $this->input->post();

		if (isset($id)) {
			//select user by id
			$user = $this->model_user->selectbyid($id);
			$this->load->view('update', $user);
		}else if ($data) {
			//update
			$response = $this->model_user->update($data, $data['id']);
			redirect();
		}else{
			redirect();
		}
	}

	public function delete($id){
		//get all input post
		if (isset($id)) {
			//delete
			$response = $this->model_user->delete($id);
		}
		redirect();
	}
}
