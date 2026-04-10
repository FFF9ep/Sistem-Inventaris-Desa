<?php

class barang_model extends CI_Model {
    public function tampilBarang()
    {
        $db = $this->db->query("SELECT * FROM barang")->result_array();
        return $db;
    }

    public function getById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function update_barang($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
    }

    public function hapus_barang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }
}