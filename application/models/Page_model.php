<?php


class Page_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }


public function profile_insert(){
    
    $data = array(
        'name' => $this->input->post('name'), 
        'docType' => $this->input->post('docType'), 
        'docNo' => $this->input->post('docNo'), 
        'dateReleased' => $this->input->post('dateReleased'), 
        'description' => $this->input->post('description')
    ); 

    return $this->db->insert('profile', $data);
    
}


public function user_insert(){
    $file = $this->upload->data();
    $filename = $file['file_name']; 

    $password = $this->input->post('password');
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $data = array(
    'email' => $this->input->post('email'), 
    'password' => $hash,
    'firstName' => $this->input->post('firstName'), 
    'middleName' => $this->input->post('middleName'), 
    'lastName' => $this->input->post('lastName'), 
    'position' => $this->input->post('position'), 
    'status' => 1, 
    'school_id' => $this->input->post('school_id'), 
    'sdo_id' => $this->input->post('sdo_id'), 
    'image' => $filename
    ); 

    return $this->db->insert('users', $data);
    
}

public function user_update(){

    $id = $this->input->post('id'); 

    $data = array(
        'firstName' => $this->input->post('firstName'),
        'middleName' => $this->input->post('middleName'),
        'lastName' => $this->input->post('lastName'),
        'position' => $this->input->post('position'),
        'school_id' => $this->input->post('school_id'),
        );

    $this->db->where('user_id', $id);
    return $this->db->update('users', $data);
}
public function user_pass(){

    $id = $this->input->post('id'); 

    $password = $this->input->post('password');
    $hash = password_hash($password, PASSWORD_DEFAULT);


    $data = array(
        'password' => $hash,
        );

    $this->db->where('user_id', $id);
    return $this->db->update('users', $data);
}
public function user_update_profile(){

    $id = $this->input->post('id');

    $file = $this->upload->data();
    $filename = $file['file_name']; 

    $data = array(
        'image' => $filename
        );

    $this->db->where('user_id', $id);
    return $this->db->update('users', $data);
}

public function report_insert(){

    $data = array(
    'incident_details' => $this->input->post('email'), 
    'password' => $hash,
    'firstName' => $this->input->post('firstName'), 
    'middleName' => $this->input->post('middleName'), 
    'lastName' => $this->input->post('lastName'), 
    'position' => $this->input->post('position'), 
    'status' => 1, 
    'school_id' => $this->input->post('school_id'), 
    'sdo_id' => $this->input->post('sdo_id'), 
    ); 

    return $this->db->insert('incident_report', $data);
    
}

public function login(){

    $password = $this->input->post('password');
    
    $this->db->where('email', $this->input->post('email', true));
    //$this->db->where('status', 0);
    //$this->db->where('Password', $this->input->post('Password', true));
    $result = $this->db->get('users');

    if($result->num_rows() == 1){
      
        $data = $result->row(); 

       if (password_verify($password, $data->password)) {
            return $result->row_array();
       }

       // return $result->row_array();
        
    }else{
        return false;
    }

}
public function lock_screen(){

    $password = $this->input->post('password');
    
    $this->db->where('email', $this->session->email);
    //$this->db->where('status', 0);
    //$this->db->where('Password', $this->input->post('Password', true));
    $result = $this->db->get('users');

    if($result->num_rows() == 1){
      
        $data = $result->row(); 

       if (password_verify($password, $data->password)) {
            return $result->row_array();
       }

       // return $result->row_array();
        
    }else{
        return false;
    }

}

public function check_dup_user($fname,$lname,$username){
    $result = $this->db->where("firstName",$fname);
    $result = $this->db->where('middleName',$lname);
    $result = $this->db->or_where('lastName',$username);
    $result = $this->db->get('users');
    return $result;
}



// common functions loop

public function no_cond($table){
    $query = $this->db->get($table);
    return $query->result();
}

public function one_cond($table,$col,$val){
    $this->db->where($col, $val);
    $query = $this->db->get($table);
    return $query->result();
}

public function two_cond($table,$col,$val,$col2,$val2){
    $this->db->where($col, $val);
    $this->db->where($col2, $val2);
    $query = $this->db->get($table);
    return $query->result();
}
public function three_cond($table,$col,$val,$col2,$val2,$col3,$val3){
    $this->db->where($col, $val);
    $this->db->where($col2, $val2);
    $this->db->where($col3, $val3);
    $query = $this->db->get($table);
    return $query->result();
}

public function one_cond_loop_order_by($table,$col,$val,$orderby,$orderbyvalue){
    $this->db->where($col, $val);
    $this->db->order_by($orderby, $orderbyvalue);
    $query = $this->db->get($table);
    return $query->result();
}


// common function single row
public function one_cond_row($table, $col, $val){
    $this->db->where($col, $val);
    $result = $this->db->get($table)->row();
    return $result;
}


//common function

public function delete($table,$col_id,$segment){
    $id = $this->uri->segment($segment);
    $this->db->where($col_id,$id);
    $this->db->delete($table);
    return true;
}

function delete_with_attach($table,$segment,$attach){
    $this->db->where('id', $segment);
    unlink("uploads/".$attach);
    $this->db->delete($table);
}











}

