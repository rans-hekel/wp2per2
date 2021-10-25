<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view("viewsepatu");
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Anda',
            'required',
            [
                'required' => 'Nama Harus Diisi'
            ]
        );
        $this->form_validation->set_rules(
            'nohp',
            'No Handphone',
            'required',
            [
                'required' => 'No Handphone Harus Diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view("viewsepatu");
        } else {
            $this->load->model("ModelSepatu");
            $nama = $this->input->post('nama', TRUE);
            $nohp = $this->input->post('nohp', TRUE);
            $merk = $this->input->post('merk', TRUE);
            $ukuran = $this->input->post('ukuran', TRUE);
            $harga = $this->ModelSepatu->getmerk($this->input->post('merk'));
            $data = [
                'nama' => $nama,
                'nohp' => $nohp,
                'merk' => $merk,
                'ukuran' => $ukuran,
                'harga' => $harga
            ];
            $this->load->view("cetaksepatu", $data);
        }
    }
}
