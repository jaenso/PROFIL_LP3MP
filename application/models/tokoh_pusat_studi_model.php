<?php

class tokoh_pusat_studi_model extends CI_Model
{
  public function  getTokoh()
  {
    return $this->db->get('tokoh')->result();
  }

  public function getTokohPage($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('tokoh');
    $this->db->join('kategori', 'tokoh.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pusat_Studi');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function countAllTokoh()
  {
    $this->db->from('tokoh');
    $this->db->join('kategori', 'tokoh.id_kategori = kategori.id_kategori');
    $this->db->where('kategori.kategori', 'pusat_Studi');
    return $this->db->count_all_results();
  }

  public function tambahTokoh($tambah_data)
  {
    $this->db->insert('tokoh', $tambah_data);
  }

  public function hapusTokoh($idt)
  {
    $this->db->delete('tokoh', ['id_tokoh' => $idt]);
  }

  public function getTokohById($idt)
  {
    return $this->db->get_where('tokoh', ['id_tokoh' => $idt])->row_array();;
  }

  public function ubahTokoh($idt, $edit_data)
  {
    $this->db->where('id_tokoh', $idt);
    $this->db->update('tokoh', $edit_data);
  }

  public function cariTokoh()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    return $this->db->get('tokoh')->result();
  }
}
