<?php

class tokoh_m extends CI_Model
{

    public function countByKategori($kategori)
    {
        $this->db->from('tokoh');
        $this->db->join('kategori', 'tokoh.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->count_all_results();
    }

    public function getAlltokoh($kategori)
    {
        $this->db->select('*');
        $this->db->from('tokoh');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->get()->result();
    }

    public function getTokohPage($limit, $start, $kategori)
    {
        $this->db->select('*');
        $this->db->from('tokoh');
        $this->db->join('kategori', 'tokoh.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function tambah($tambah)
    {
        $this->db->insert('tokoh', $tambah);
    }

    public function hapus($id)
    {
        $this->db->delete('tokoh', ['id_tokoh' => $id]);
    }

    public function getTokohById($id)
    {
        return $this->db->get_where('tokoh', ['id_tokoh' => $id])->row_array();;
    }

    public function ubah($id, $edit)
    {
        $this->db->where('id_tokoh', $id);
        $this->db->update('tokoh', $edit);
    }

    public function caritokoh()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('tokoh')->result();
    }
}
