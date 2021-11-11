<?php

class Mitra_model extends CI_Model
{
    public function getAllMitra()
    {
        return $query = $this->db->get('mitra')->result_array();
    }

    public function tambahDataMitra()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenkel" => $this->input->post('jenkel', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
        ];

        $this->db->insert('mitra', $data);
    }

    public function hapusDataMitra($id)
    {
        $this->db->where('idmitra', $id);
        $this->db->delete('mitra');
    }

    public function getMitraById($id)
    {
        return $this->db->get_where('mitra', ['idmitra' => $id])->row_array();
    }

    public function ubahDataMitra()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenkel" => $this->input->post('jenkel', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
        ];

        $this->db->where('idmitra', $this->input->post('idmitra'));
        $this->db->update('mitra', $data);
    }
}
