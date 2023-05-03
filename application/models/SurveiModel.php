<?php


class SurveiModel extends CI_Model
{
    protected $table            = 'tb_survei';
    protected $primaryKey       = 'id_survei';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';


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

    public function getEnum($field)
    {
        $query = $this->db->query("SHOW FIELDS FROM `" . $this->table . "` LIKE '" . $field . "';");
        if ($this->returnType == 'array') {
            $data = $query->row_array();
        } else {
            $data = $query->row();
        }

        $option_array = [];
        if ($data) {
            $option_array = explode("','", preg_replace("/(enum|set)\('(.+?)'\)/", "\\2", $data['Type']));
        }

        return $option_array;
    }

    public function getLastId()
    {
        $this->db->limit(1);
        $this->db->order_by($this->primaryKey, 'DESC');

        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->row_array();
        } else {
            $data = $this->db->get($this->table)->row();
        }
        return $data['id_survei'];
    }


    public function getAll($id)
    {
        $this->db->where($this->table . '.' . $this->primaryKey, $id);
        $this->db->join('tb_administrasi', 'tb_administrasi.id_survei = tb_survei.id_survei');
        $this->db->join('tb_rekomendasi', 'tb_rekomendasi.id_survei = tb_survei.id_survei');

        if ($this->returnType == 'array') {
            $data = $this->db->get($this->table)->row_array();
        } else {
            $data = $this->db->get($this->table)->row();
        }
        return $data;
    }
}
