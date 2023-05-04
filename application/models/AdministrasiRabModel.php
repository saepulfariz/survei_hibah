<?php


class AdministrasiRabModel extends CI_Model
{
    protected $table            = 'tb_administrasi_rab';
    protected $primaryKey       = 'id_rab';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';


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

    public function getNewRab()
    {
        $this->db->where('id_survei', 0);
        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->result_array();
        } else {
            $data = $this->db->get($this->table)->result();
        }
        return $data;
    }

    public function updateNew($id_survei)
    {
        $this->db->where('id_survei', 0);
        $data = [
            'id_survei' => $id_survei
        ];
        return $this->db->update($this->table, $data);
    }


    public function deleteRab($id_survei)
    {
        $this->db->where('id_survei', $id_survei);
        return $this->db->delete($this->table);
    }

    public function getRab($id_survei)
    {
        $this->db->where('id_survei', $id_survei);
        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->result_array();
        } else {
            $data = $this->db->get($this->table)->result();
        }
        return $data;
    }
}
