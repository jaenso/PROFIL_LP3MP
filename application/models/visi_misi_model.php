<?php

class visi_misi_model extends CI_Model
{
  public function getVisi()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where("kategori.kategori", "visi");

    return $this->db->get()->result();
  }

  public function getMisi()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where("kategori.kategori", "misi");

    return $this->db->get()->result();
  }

  public function getTujuan()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where("kategori.kategori", "tujuan");

    return $this->db->get()->result();
  }

  public function getVisiMisi()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where("kategori.kategori IN ('misi', 'visi', 'tujuan')");
    return $this->db->get()->result();
  }

  public function countAllVisiMisi()
  {
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'VisiMisi');
    return $this->db->count_all_results();
  }

  public function getVisiMisiById($idf)
  {
    return $this->db->get_where('informasi', ['id_informasi' => $idf])->row_array();;
  }

  public function ubahVisiMisi()
  {
    $data = [
      "judul" => $this->input->post('judul', true),
      "isi" => $this->input->post('isi', true)
    ];
    $this->db->where('id_informasi', $this->input->post('idf'));
    $this->db->update('informasi', $data);
  }

  public function cariVisiMisi()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('judul', $keyword);
    return $this->db->get('informasi')->result();
  }
}
