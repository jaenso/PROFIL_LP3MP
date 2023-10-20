<?php

class dok_lp3mp_model extends CI_Model
{

  public function getDokumenPage($limit, $start)
  {
    $this->db->select('*');
    $this->db->from('dok_lp3mp');
    $this->db->limit($limit, $start);
    return $this->db->get()->result();
  }

  public function countAllDokumen()
  {
    $this->db->from('dok_lp3mp');
    return $this->db->count_all_results();
  }

  public function tambahDokumen($tambah_data)
  {
    $this->db->insert('dok_lp3mp', $tambah_data);
  }

  public function hapusDokumen($idk)
  {
    $this->db->delete('dok_lp3mp', ['id_dok' => $idk]);
  }

  public function getDokumenById($idk)
  {
    return $this->db->get_where('dok_lp3mp', ['id_dok' => $idk])->row_array();;
  }

  public function ubahDokumen($idk, $edit_data)
  {
    $this->db->where('id_dok', $idk);
    $this->db->update('dok_lp3mp', $edit_data);
  }

  public function cariDokumen()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('p_studi', $keyword);
    return $this->db->get('dok_lp3mp')->result();
  }
}
