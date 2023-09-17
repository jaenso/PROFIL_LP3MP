<?php

class pengelola_model extends CI_Model {
    public function  getpengelola(){
      $this->db->select('*');
      $this->db->from('informasi');
      $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
      $this->db->where('kategori.kategori', 'pengelola');
        return $this->db->get()->result();
    }

    public function getPengelolaPage($limit, $start) {
    $this->db->select('*');
    $this->db->from('informasi');
    $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pengelola');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
    }

    public function countAllPengelola() {
      $this->db->from('informasi');
      $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
      $this->db->where('kategori.kategori', 'pengelola');
      return $this->db->count_all_results();
  }

    public function hapusPengelola($idf){
      $this->db->delete('informasi', ['id_informasi' => $idf]);
    }

    public function getPengelolaById($idf)
    {
        return $this->db->get_where('informasi', ['id_informasi' => $idf])->row_array();;
    }

    public function ubahPengelola(){
      $data = [
          "judul" => $this->input->post('judul', true),
          "isi" => $this->input->post('isi', true)
      ];
      $this->db->where('id_informasi', $this->input->post('idf'));
      $this->db->update('informasi', $data);
    }

    public function cariPengelola(){
      $keyword=$this->input->post('keyword', true);
      $this->db->like('judul', $keyword);
      return $this->db->get('informasi')->result();
    }
}

?>