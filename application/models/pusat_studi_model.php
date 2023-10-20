<?php

class pusat_studi_model extends CI_Model
{
  public function  getPusat_Studi()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pusat_studi');
    return $this->db->get()->result();
  }

  public function getPusat_StudiPage($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pusat_studi');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function countAllPusat_Studi()
  {
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pusat_studi');
    return $this->db->count_all_results();
  }

  public function hapusPusat_Studi($idf)
  {
    $this->db->delete('informasi', ['id_informasi' => $idf]);
  }

  public function getPusat_StudiById($idf)
  {
    return $this->db->get_where('informasi', ['id_informasi' => $idf])->row_array();;
  }

  public function ubahPusat_Studi()
  {
    $data = [
      "judul" => $this->input->post('judul', true),
      "isi" => $this->input->post('isi', true)
    ];
    $this->db->where('id_informasi', $this->input->post('idf'));
    $this->db->update('informasi', $data);
  }

  public function cariPusat_Studi()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('judul', $keyword);
    return $this->db->get('informasi')->result();
  }
}
