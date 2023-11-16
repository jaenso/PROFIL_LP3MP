<?php

class konten_m extends CI_Model
{
    public function countByKategori($kategori)
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->count_all_results();
    }

    public function getKontenPage($limit, $start, $kategori)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }


    public function getKonten($kategori)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->get()->result();
    }

    public function tambah($tambah)
    {
        $this->db->insert('konten', $tambah);
    }

    public function hapus($id)
    {
        $this->db->delete('konten', ['id_konten' => $id]);
    }

    public function getDetailKonten($id, $kategori)
    {
        $this->db->select('konten.*, kategori.kategori');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('konten.id_konten', $id);
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->get()->result();
    }

    public function getKontenById($id)
    {
        return $this->db->get_where('konten', ['id_konten' => $id])->row_array();;
    }

    public function ubah($id, $edit)
    {
        $this->db->where('id_konten', $id);
        $this->db->update('konten', $edit);
    }

    public function getKontenLimit($limit, $kategori)
    {
        $tanggalEnamBulanLalu = date('Y-m-d', strtotime('-6 months'));

        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);

        $this->db->where('konten.tanggal >=', $tanggalEnamBulanLalu);

        $this->db->limit($limit);
        return $this->db->get()->result();
    }
}
