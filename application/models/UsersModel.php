<?php
class UsersModel extends CI_Model
{
    protected $table = 'users';

   public function get_divisions()
{
    $divisions = $this->db->distinct()->select('division')->get('schools')->result();
    echo json_encode($divisions);
}


public function get_schools_by_sdo()
{
    $sdo = $this->input->post('sdo');
    $schools = $this->db->select('school_id, schoolName')
                        ->where('sdo', $sdo)
                        ->get('schools')
                        ->result();
    echo json_encode($schools);
}



}
