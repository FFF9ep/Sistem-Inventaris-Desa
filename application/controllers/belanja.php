<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

    public function index()
    {
        $this->load->view('belanja');
    }

    public function inputBelanja()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

        $total = $harga * $jumlah;

        $data = [
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total
        ];

        $this->load->view('hasil_belanja', $data);
    }
}