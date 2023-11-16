<?php

class dok_sertifikat_model extends CI_Model
{
  public function filterByProgramStudi($fakultas)
  {
    $this->db->select('*');
    $this->db->from('dok_sertifikat');

    if (!empty($fakultas)) {
      $this->db->where('fakultas', $fakultas);
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getDokumen()
  {
    $this->db->select('*');
    $this->db->from('dok_sertifikat');
    return $this->db->get()->result();
  }

  public function import($data)
  {
    $p_studi = $data['p_studi'];

    $existing_data = $this->db->get_where('dok_sertifikat', array('p_studi' => $p_studi))->row();

    if ($existing_data) {
      $this->db->where('p_studi', $p_studi);
      $this->db->update('dok_sertifikat', $data);
    } else {
      $this->db->insert('dok_sertifikat', $data);
    }
  }

  public function tambahDokumen($tambah_data)
  {
    $this->db->insert('dok_sertifikat', $tambah_data);
  }

  public function hapusDokumen($idk)
  {
    $this->db->delete('dok_sertifikat', ['id_dok' => $idk]);
  }

  public function getDokumenById($idk)
  {
    return $this->db->get_where('dok_sertifikat', ['id_dok' => $idk])->row_array();;
  }

  public function ubahDokumen($idk, $edit_data)
  {
    $this->db->where('id_dok', $idk);
    $this->db->update('dok_sertifikat', $edit_data);
  }
}
