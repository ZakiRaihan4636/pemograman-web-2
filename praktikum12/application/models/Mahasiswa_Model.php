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


    // function Predikat($ipk)
    // {
    //     return ($ipk >= 3.75) ? "Cumlaude" : "Baik";
    // }


    public function findById($id)
    {
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        //insert into
        $sql = "INSERT INTO mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,prodi_kode,ipk)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data)
    {
        $sql = "UPDATE mahasiswa SET nim=?,nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,prodi_kode=?,ipk=? WHERE nim=?";
        $this->db->query($sql, $data);
    }

    public function deleteMahasiswa($id)
    {
        $this->db->where('nim', $id);
        $query = $this->db->delete($this->table);
        return $query;
    }
}
