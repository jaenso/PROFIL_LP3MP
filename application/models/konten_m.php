<?php

class konten_m extends CI_Model
{
    public function getKontenByFilter($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->where('tanggal >=', $tgl_awal);
        $this->db->where('tanggal <=', $tgl_akhir);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function countByKategori($kategori)
    {
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->count_all_results();
    }

    public function getKontenPage($limit, $start, $kategori)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->where('kategori.kategori', $kategori);
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }

    public function tambah($tambah)
    {
        $this->db->insert('konten', $tambah);
    }

    public function hapus($id)
    {
        $this->db->delete('konten', ['id_konten' => $id]);
    }

    public function getDetailKonten($id)
    {
        return $this->db->get_where('konten', ['id_konten' => $id])->result();;
    }

    public function getKontenById($id)
    {
        return $this->db->get_where('konten', ['id_konten' => $id])->row_array();;
    }

    public function ubah($id, $edit)
    {
        $this->db->where('id_konten', $id);
        $this->db->update('konten', $edit);
    }

    public function cariKonten()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('konten')->result();
    }

    public function getKonten($limit)
    {
        $this->db->select('*');
        $this->db->from('konten');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function getAllKonten()
    {
        $this->db->select('*');
        $this->db->from('konten');
        return $this->db->get()->result();
    }
}
