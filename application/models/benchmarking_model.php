<?php

class benchmarking_model extends CI_Model
{
    public function getKonten($idk)
    {
        return $this->db->get_where('konten', ['id_konten' => $idk])->result();;
    }

    public function  getBenchmarking()
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'Benchmarking');
        return $this->db->get()->result();
    }

    public function getBenchmarkingPage($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'benchmarking');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function countAllBenchmarking()
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', 'benchmarking');
        return $this->db->count_all_results();
    }

    public function tambahBenchmarking($tambah_data)
    {
        $this->db->insert('konten', $tambah_data);
    }

    public function hapusBenchmarking($idk)
    {
        $this->db->delete('konten', ['id_konten' => $idk]);
    }

    public function getBenchmarkingById($idk)
    {
        return $this->db->get_where('konten', ['id_konten' => $idk])->row_array();;
    }

    public function ubahBenchmarking($idk, $edit_data)
    {
        $this->db->where('id_konten', $idk);
        $this->db->update('konten', $edit_data);
    }

    public function cariBenchmarking()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('konten')->result();
    }
}
