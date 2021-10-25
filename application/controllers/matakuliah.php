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
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );


        if ($this->form_validation->run() == false) {
            $this->load->view("view_form_matkul");
        } else {
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
}
