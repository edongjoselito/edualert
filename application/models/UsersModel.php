<?php
class UsersModel extends CI_Model
{
    protected $table = 'users';

    public function get_all_users()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_user($id)
    {
        return $this->db->get_where($this->table, ['user_id' => $id])->row();
    }

    public function insert_user($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_user($id, $data)
    {
        $this->db->where('user_id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_user($id)
    {
        return $this->db->delete($this->table, ['user_id' => $id]);
    }
}
