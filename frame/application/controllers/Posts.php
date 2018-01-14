<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/posts
	 *	- or -
	 * 		http://example.com/index.php/posts/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->config_model->config_settings();
	}

	public function index()
	{
		$this->load->model('posts_model');
		$data['query'] = $this->posts_model->fetch_data();

		$this->load->view('templates/header');
		$this->load->view('templates/posts', $data);
		$this->load->view('templates/footer');
	}

	public function authors()
	{
		$data = array();
		$this->load->model('user');
        if($this->session->userdata('isUserLoggedIn')){
            $userId = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            $this->load->model('posts_model');
			$data['query'] = $this->posts_model->fetch_data($userId);
			$data['userId'] = $userId['id'];

			$this->load->view('templates/header');
			$this->load->view('templates/posts', $data);
			$this->load->view('templates/footer');
        }else{
            redirect('users/login');
        }
	}

	function author_add()
	{

	}
	
	function posts_details($aid)
	{
		$this->load->model('postsdetails_model');
		$data['query'] = $this->postsdetails_model->fetch_data($aid);

		$this->load->view('templates/header');
		$this->load->view('templates/postsdetails', $data);
		$this->load->view('templates/footer');
	}
}
