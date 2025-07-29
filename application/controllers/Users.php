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

    public function index()
    {
        $data['users'] = $this->UsersModel->get_all_users();
        $this->load->view('user_list', $data);
    }

    public function create()
    {
        $this->load->view('users/create');
    }

    public function store()
    {
        $password = $this->input->post('password');
        $data = [
            'email'        => $this->input->post('email'),
            'password'     => sha1($password), // CI3 encryption
            'firstName'    => $this->input->post('firstName'),
            'middleName'   => $this->input->post('middleName'),
            'lastName'     => $this->input->post('lastName'),
            'position'     => $this->input->post('position'),
            'status'       => $this->input->post('status'),
            'school_name'  => $this->input->post('school_name'),
            'sdo'          => $this->input->post('sdo'),
            'created_at'   => date('Y-m-d H:i:s')
        ];

        $this->UsersModel->insert_user($data);
        redirect('users');
    }

    public function edit($id)
    {
        $data['user'] = $this->UsersModel->get_user($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'email'        => $this->input->post('email'),
            'firstName'    => $this->input->post('firstName'),
            'middleName'   => $this->input->post('middleName'),
            'lastName'     => $this->input->post('lastName'),
            'position'     => $this->input->post('position'),
            'status'       => $this->input->post('status'),
            'school_name'  => $this->input->post('school_name'),
            'sdo'          => $this->input->post('sdo'),
            'updated_at'   => date('Y-m-d H:i:s')
        ];

        if (!empty($this->input->post('password'))) {
            $data['password'] = sha1($this->input->post('password'));
        }

        $this->UsersModel->update_user($id, $data);
        redirect('users');
    }

    public function delete($id)
    {
        $this->UsersModel->delete_user($id);
        redirect('users');
    }
}
