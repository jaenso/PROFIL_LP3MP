<?php

class pengaturan_website_model extends CI_Model
{
  public function getWebsiteById($idw)
  {
    return $this->db->get_where('website', ['id_website' => $idw])->row_array();;
  }

  public function ubahWebsite($idw, $edit_data)
  {
    $this->db->where('id_website', $idw);
    $this->db->update('website', $edit_data);
  }
}
