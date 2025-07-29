<?php
class UsersModel extends CI_Model
{
    protected $table = 'users';

   public function getDivisions()
    {
        $this->db->distinct();
        $this->db->select('division');
        $this->db->from('schools');
        $this->db->order_by('division', 'ASC');
        return $this->db->get()->result();
    }

    public function getSchoolsByDivision($division)
    {
        return $this->db->get_where('schools', ['division' => $division])->result();
    }

    public function insert_user($data)
{
    return $this->db->insert('users', $data);
}



}
