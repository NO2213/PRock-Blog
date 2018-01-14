<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/pages
	 *	- or -
	 * 		http://example.com/index.php/pages/index
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
		$this->load->helper('string');
	}

	public function index()
	{
		$this->load->model('home_model');
		$this->config_model->config_settings();
		$data['query'] = $this->home_model->fetch_data();

		$this->load->view('templates/header');
		$this->load->view('templates/home', $data);
		$this->load->view('templates/footer');
	}
}
