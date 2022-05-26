<?php
class Dosen_Model extends CI_Model
{

    // Buat Struktur data
    private $table = "dosen";

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
        $this->db->where('nidn', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data)
    {
        //insert into
        $sql = "INSERT INTO dosen (nidn,nama,gender,tmp_lahir,tgl_lahir,pendidikan_akhir,prodi_kode)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data)
    {
        $sql = "UPDATE dosen SET nidn=?,nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,pendidikan_akhir=?,prodi_kode=? WHERE nidn=?";
        $this->db->query($sql, $data);
    }

    public function deleteDosen($id)
    {
        $this->db->where('nidn', $id);
        $query = $this->db->delete($this->table);
        return $query;
    }
}
