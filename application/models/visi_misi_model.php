<?php

class visi_misi_model extends CI_Model {
    public function  getVisiMisi(){
        return $this->db->get('informasi')->result();
    }

    //public function  getVisiMisiPage($limit, $start){
      //return $this->db->get('informasi', $limit, $start)->result();
    //}

    //public function  getVisiMisiPage($limit, $start){
      //$this->db->select('*');
      //$this->db->from('informasi');
      //$this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
      //$this->db->where('kategori.nama_kategori', 'pengumuman');
      //return $this->db->get('informasi', $limit, $start)->result();
    //}
    public function getVisiMisiPage($limit, $start) {
      $this->db->select('*');
      $this->db->from('informasi');
      $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
      $this->db->where("kategori.kategori IN ('misi', 'visi')");
      $this->db->limit($limit, $start);
      return $this->db->get()->result();
  }
  

    //public function countAllVisiMisi(){
      //return $this->db->get('informasi')->num_rows();
    //}
    public function countAllVisiMisi() {
      $this->db->from('informasi');
      $this->db->join('kategori', 'informasi.id_kategori = kategori.id_kategori');
      $this->db->where('kategori.kategori', 'VisiMisi');
      return $this->db->count_all_results();
  }
  


    public function tambahVisiMisi(){
        $data = [
          "judul" => $this->input->post('judul', true),
          "isi" => $this->input->post('isi', true),
          "id_kategori" => $this->input->post('id_ktg', true)
        ];
        $this->db->insert('informasi', $data);
    }

    public function hapusVisiMisi($idf){
      $this->db->delete('informasi', ['id_informasi' => $idf]);
    }

    public function getVisiMisiById($idf)
    {
        return $this->db->get_where('informasi', ['id_informasi' => $idf])->row_array();;
    }

    public function ubahVisiMisi(){
      $data = [
          "judul" => $this->input->post('judul', true),
          "isi" => $this->input->post('isi', true)
      ];
      $this->db->where('id_informasi', $this->input->post('idf'));
      $this->db->update('informasi', $data);
    }

    public function cariVisiMisi(){
      $keyword=$this->input->post('keyword', true);
      $this->db->like('judul', $keyword);
      return $this->db->get('informasi')->result();
    }
}

?>