<?php

class konten_model extends CI_Model
{

    public function getKonten($limit)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function getKontenPage($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function countAllKonten()
    {
        $this->db->from('konten');
        return $this->db->count_all_results();
    }
}
