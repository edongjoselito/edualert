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
    $this->load->library('form_validation');

    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE) {
        $data['divisions'] = $this->UsersModel->getDivisions(); // Load unique divisions
        $this->load->view('pages/signup', $data);
    } else {
        $data = [
            'email'       => $this->input->post('email'),
            'password'    => sha1($this->input->post('password')),  // Or use password_hash()
            'firstName'   => $this->input->post('firstName'),
            'middleName'  => $this->input->post('middleName'),
            'lastName'    => $this->input->post('lastName'),
            'position'    => 'Learner',
            'status'      => '1',
            'sdo_id'      => $this->input->post('division'), // Maps to sdo_id column
            'school_id'   => $this->input->post('school_id'),
            'image'       => 'avatar.png'
        ];

        $this->load->model('UsersModel');

        // Call model method to insert user
        if ($this->UsersModel->insert_user($data)) {
            $this->session->set_flashdata('msg', 'Registration successful! You may now login.');
        } else {
            $this->session->set_flashdata('msg', 'Registration failed. Please try again.');
        }

        redirect('pages/signup');
    }
}



  public function get_schools_by_division()
{
    $division = $this->input->post('division');
    $schools = $this->UsersModel->getSchoolsByDivision($division);

    echo json_encode($schools);
}

    
}
