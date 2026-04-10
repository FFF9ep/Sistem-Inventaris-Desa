<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
    }

    public function index()
    {
        $listBarang = $this->barang_model->tampilBarang();
        $data['listBarang'] = $listBarang;
        $data['titleTambahBarang'] = 'Tambah Barang';
        $data['titleDaftarBarang'] = 'Daftar Barang';
        $this->loadPartials('barang/index', $data);
    }

    public function tambah_barang()
    {
        $nama = $this->input->post("nama");
        $harga = $this->input->post("harga");
        $stok = $this->input->post("stok");

        $dataInput = array(
            'nama' => $nama,
            'harga' => $harga,
            'stok_barang' => $stok
        );
        $this->db->insert('barang', $dataInput);
        redirect('barang');
    }

    public function edit_barang($id)
    {
        $data['barang'] = $this->barang_model->getById($id);
        $this->load->view('barang/edit_barang', $data);
    }

    public function proses_edit_barang()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $dataUpdate = [
            'nama' => $nama,
            'harga' => $harga,
            'stok_barang' => $stok
        ];

        $this->barang_model->update_barang($id, $dataUpdate);
        redirect('barang');
    }

    public function hapus_barang($id)
    {
        $this->barang_model->hapus_barang($id);
        redirect('barang');
    }
}