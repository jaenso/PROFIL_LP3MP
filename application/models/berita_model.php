<?php

class berita_model extends CI_Model
{
  public function getKonten($idk) {
    return $this->db->get_where('konten', ['id_konten' => $idk])->result();;
  }

  public function  getBerita()
  {
    $this->db->select('*');
    $this->db->from('konten');
    $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'berita');
    return $this->db->get()->result();
  }

  public function getBeritaPage($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('konten');
    $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'berita');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function countAllBerita()
  {
    $this->db->from('konten');
    $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'berita');
    return $this->db->count_all_results();
  }

  public function tambahBerita($tambah_data)
  {
    $this->db->insert('konten', $tambah_data);
  }

  public function hapusBerita($idk)
  {
    $this->db->delete('konten', ['id_konten' => $idk]);
  }

  public function getBeritaById($idk)
  {
    return $this->db->get_where('konten', ['id_konten' => $idk])->row_array();;
  }

  public function ubahBerita($idk, $edit_data)
  {
    $this->db->where('id_konten', $idk);
    $this->db->update('konten', $edit_data);
  }

  public function cariBerita()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('judul', $keyword);
    return $this->db->get('konten')->result();
  }
}