<?php

class Matkul_model extends CI_Model
{
    public function getAllMatkul()
    {
        $query = $this->db->get('matkul');
        return $query->result_array();
    }

    public function tambahDataMatkul()
    {
        $data = [
            "nm_matkul" => $this->input->post("nm_matkul", true),
            "kd_matkul" => $this->input->post("kd_matkul", true),
            "ruangan" => $this->input->post("ruangan", true),
        ];
        $this->db->insert('matkul', $data);
    }

    public function ubahDatamatkul()
    {
        $data = [
            "nm_matkul" => $this->input->post("nm_matkul", true),
            "kd_matkul" => $this->input->post("kd_matkul", true),
            "ruangan" => $this->input->post("ruangan", true),
        ];
        $this->db->where('id_matkul', $this->input->post('id'));
        $this->db->update('matkul', $data);
    }

    public function hapusDatamatkul($id)
    {
        $this->db->where('id_matkul', $id);
        $this->db->delete('matkul');
    }

    public function getmatkulById($id)
    {
        return $this->db->get_where('matkul', ['id_matkul' => $id])->row_array();
    }

    public function cariDatamatkul()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nm_matkul', $keyword);
        $this->db->or_like('kd_matkul', $keyword);
        $this->db->or_like('ruangan', $keyword);
        return $this->db->get('matkul')->result_array();
    }
}
