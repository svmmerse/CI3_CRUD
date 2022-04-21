<?php

class Rekap_model extends CI_Model
{

    public function getAllRekap()
    {

        $query = $this->db->get('rekap');
        return $query->result_array();
    }

    public function tambahDataRekap()
    {
        $data = [
            "nm_mhs" => $this->input->post("nm_mhs", true),
            "nrp" => $this->input->post("nrp", true),
            "nm_matkul" => $this->input->post("nm_matkul", true),
            "kd_matkul" => $this->input->post("kd_matkul", true)
        ];
        $this->db->insert('rekap', $data);
    }

    public function ubahDataRekap()
    {
        $data = [
            "nama" => $this->input->post("nama", true),
            "nrp" => $this->input->post("nrp", true),
            "email" => $this->input->post("email", true),
            "jurusan" => $this->input->post("jurusan", true)
        ];
        $this->db->where('id_rekap', $this->input->post('id'));
        $this->db->update('rekap', $data);
    }

    public function hapusDataRekap($id)
    {
        $this->db->where('id_rekap', $id);
        $this->db->delete('rekap');
    }

    public function getRekapById($id)
    {
        return $this->db->get_where('rekap', ['id_rekap' => $id])->row_array();
    }

    public function cariDataRekap()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nm_mhs', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('nm_matkul', $keyword);
        $this->db->or_like('kd_matkul', $keyword);
        return $this->db->get('rekap')->result_array();
    }
}
