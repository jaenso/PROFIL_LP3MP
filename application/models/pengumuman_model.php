<?php

class Pengumuman_model extends CI_Model {
    public function  getPengumuman(){
        return $this->db->get('konten')->result();
    }
    
    public function getPengumumanPage($limit, $start) {
    $this->db->select('*');
    $this->db->from('konten');
    $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pengumuman');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
    }

    public function countAllPengumuman() {
      $this->db->from('konten');
      $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
      $this->db->where('kategori.kategori', 'pengumuman');
      return $this->db->count_all_results();
  }
  


    public function tambahPengumuman($tambah_data){
        $this->db->insert('konten', $tambah_data);
    }

    public function hapusPengumuman($idk){
      $this->db->delete('konten', ['id_konten' => $idk]);
    }

    public function getPengumumanById($idk)
    {
        return $this->db->get_where('konten', ['id_konten' => $idk])->row_array();;
    }

    public function ubahPengumuman($idk, $edit_data){
      $this->db->where('id_konten', $idk);
      $this->db->update('konten', $edit_data);
    }

    public function cariPengumuman(){
      $keyword=$this->input->post('keyword', true);
      $this->db->like('judul', $keyword);
      return $this->db->get('konten')->result();
    }
}

?>