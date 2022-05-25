<?php
class Mahasiswa_Model extends CI_Model
{

    // Buat Struktur data
    private $table = "mahasiswa";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }


    function Predikat($ipk)
    {
        return ($ipk >= 3.75) ? "Cumlaude" : "Baik";
    }


    public function findById($id)
    {
        $this->db->where("kode", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        //
    }

    public function update($data)
    {
        //
    }

    public function delete($id)
    {
    }
}
