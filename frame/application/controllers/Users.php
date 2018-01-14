<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->config_model->config_settings();
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('templates/header');
            $this->load->view('users/account', $data);
            $this->load->view('templates/footer');
        }else{
            redirect('users/login');
        }
    }
    
    /*
     * User login
     */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email_address'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => 'active'
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('users/account/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }

        //load the view
        $this->load->view('templates/header');
        $this->load->view('users/login', $data);
        $this->load->view('templates/footer');
    }
    
    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();

        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('fname', 'First name', 'required');
            $this->form_validation->set_rules('lname', 'Last name', 'required');
            $this->form_validation->set_rules('email_address', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'fname'         => strip_tags($this->input->post('fName')),
                'lname'         => strip_tags($this->input->post('lName')),
                'email_address' => strip_tags($this->input->post('email_address')),
                'password'      => md5($this->input->post('password'))
            );
            
            if($this->form_validation->run() == true){
                //echo('e');
                $insert = $this->user->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
            //print_r($userData);die();
        }
        $data['user'] = $userData;
        
        //load the view
        $this->load->view('templates/header');
        $this->load->view('users/registration', $data);
        $this->load->view('templates/footer');
    }
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email_address'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}