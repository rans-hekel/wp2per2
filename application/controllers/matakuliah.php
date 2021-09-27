<?php
defined('BASEPATH') or exit('No direct script access allowed');

class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view("view_form_matkul");
    }
    public function cetak()
    {
        $kode = $this->input->post('kode', TRUE);
        $nama = $this->input->post('nama', TRUE);
        $sks = $this->input->post('sks', TRUE);

        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'sks' => $sks
        ];
        $this->load->view("view_data_matkul", $data);
    }
}
