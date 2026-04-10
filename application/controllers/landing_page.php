<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_page extends CI_Controller {

	public function index()
	{
		$data['pencipta'] = "STI PROJECT GROUP";
        $data['ketua_tim'] = "ARIF RAHMAN";
        $this->load->view('index_landing', $data);
	}

    public function tambah_buku_tamu()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $komentar = $this->input->post('komentar');

        echo "Hasil Buku Tamu: <br />";
        echo "Nama: " .$nama. "<br />";
        echo "Email: " .$email. "<br />";
        echo "Komentar: " .$komentar. "<br />";
    }
}
