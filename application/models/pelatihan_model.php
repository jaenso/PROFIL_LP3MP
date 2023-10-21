<?php

class pelatihan_model extends CI_Model
{
    public function getKonten($idk)
    {
        return $this->db->get_where('konten', ['id_konten' => $idk])->result();;
    }

    public function  getPelatihan()
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'pelatihan');
        return $this->db->get()->result();
    }

    public function getPelatihanPage($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'pelatihan');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function countAllPelatihan()
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'pelatihan');
        return $this->db->count_all_results();
    }

    public function tambahPelatihan($tambah_data)
    {
        $this->db->insert('konten', $tambah_data);
    }

    public function hapusPelatihan($idk)
    {
        $this->db->delete('konten', ['id_konten' => $idk]);
    }

    public function getPelatihanById($idk)
    {
        return $this->db->get_where('konten', ['id_konten' => $idk])->row_array();;
    }

    public function ubahPelatihan($idk, $edit_data)
    {
        $this->db->where('id_konten', $idk);
        $this->db->update('konten', $edit_data);
    }

    public function cariPelatihan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('konten')->result();
    }
}
