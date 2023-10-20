<?php

class sejarah_model extends CI_Model
{
  public function  getSejarah()
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'sejarah');
    return $this->db->get()->result();
  }

  public function getsejarahPage($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'sejarah');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function countAllsejarah()
  {
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'sejarah');
    return $this->db->count_all_results();
  }

  public function tambahSejarah()
  {
    $data = [
      "judul" => $this->input->post('judul', true),
      "isi" => $this->input->post('isi', true),
      "id_kategori" => $this->input->post('id_ktg', true)
    ];
    $this->db->insert('informasi', $data);
  }

  public function hapusSejarah($idf)
  {
    $this->db->delete('informasi', ['id_informasi' => $idf]);
  }

  public function getSejarahById($idf)
  {
    return $this->db->get_where('informasi', ['id_informasi' => $idf])->row_array();;
  }

  public function ubahSejarah()
  {
    $data = [
      "judul" => $this->input->post('judul', true),
      "isi" => $this->input->post('isi', true)
    ];
    $this->db->where('id_informasi', $this->input->post('idf'));
    $this->db->update('informasi', $data);
  }

  public function carisejarah()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('judul', $keyword);
    return $this->db->get('informasi')->result();
  }
}
