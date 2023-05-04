<?php


class UserModel extends CI_Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';

    public function getUserLogin($username)
    {
        $this->db->where('username ', $username);
        // $this->db->or_where('email', $username);
        $this->db->join('tb_role', 'tb_user.id_role = tb_role.id_role');
        return $this->db->get('tb_user');
    }


    public function getRole()
    {
        return $this->db->get('tb_role')->result_array();
    }

    public function getUser()
    {
        $this->db->join('tb_role', 'tb_user.id_role = tb_role.id_role');
        return $this->db->get('tb_user')->result_array();
    }

    public function getProfile($id)
    {
        $this->db->where($this->primaryKey, $id);

        $this->db->join('tb_role', 'tb_user.id_role = tb_role.id_role');

        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->row_array();
        } else {
            $data = $this->db->get($this->table)->row();
        }
        return $data;
    }

    public function where($key, $value)
    {
        $this->db->where($key, $value);

        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->row_array();
        } else {
            $data = $this->db->get($this->table)->row();
        }
        return $data;
    }

    public function find($id)
    {
        $this->db->where($this->primaryKey, $id);

        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->row_array();
        } else {
            $data = $this->db->get($this->table)->row();
        }
        return $data;
    }

    public function findAll()
    {
        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->result_array();
        } else {
            $data = $this->db->get($this->table)->result();
        }
        return $data;
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, $data);
    }


    public function delete($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->delete($this->table);
    }

    public function getTimeSurvei()
    {
        $this->db->select('*, (SELECT count(id_survei) FROM tb_survei WHERE cid = id_user) as cek');
        // $this->db->where('id_role', 2);
        $this->db->join('tb_role', 'tb_role.id_role = tb_user.id_role');
        return $this->findAll();
    }
}
