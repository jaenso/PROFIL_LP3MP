<?php

class informasi_m extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
        $this->db->where("kategori.kategori IN ('misi', 'visi', 'tujuan')");
        return $this->db->get()->result();
    }

    public function getInformasi($kategori)
    {
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
        $this->db->where("kategori.kategori", $kategori);

        return $this->db->get()->result();
    }

    public function getInformasiById($id)
    {
        return $this->db->get_where('informasi', ['id_informasi' => $id])->row_array();;
    }

    public function ubahInformasi($id, $edit)
    {
        $this->db->where('id_informasi', $id);
        $this->db->update('informasi', $edit);
    }
}
