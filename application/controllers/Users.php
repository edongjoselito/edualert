<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UsersModel');
        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'session']);
    }


public function register()
{
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('pages/signup');
    } else {
        $data = [
            'email'       => $this->input->post('email'),
            'password'    => sha1($this->input->post('password')),  
            'firstName'   => $this->input->post('firstName'),
            'middleName'  => $this->input->post('middleName'),
            'lastName'    => $this->input->post('lastName'),
            'position'    => 'Learner',
            'status'      => '1',
            'school_id'     => $this->input->post('school_id'),
            'sdo_id'         => $this->input->post('sdo_id'),
            'image'         => 'avatar.png'
        ];

        $this->UsersModel->insert_user($data);
        $this->session->set_flashdata('msg', 'Registration successful! You may now login.');
        redirect('pages/signup');
    }
}

   
    
}
