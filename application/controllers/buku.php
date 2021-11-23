<?php
defined('BASEPATH') or exit('No direct script access allowed');
class buku extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kategori Buku';
        $data['user'] = $this->Modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Modelbuku->getKategori()->result_array();
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            [
                'required' => 'Judul Buku harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kategori' => $this->input->post('kategori')
            ];
            $this->Modelbuku->simpanKategori($data);
            redirect('buku');
        }
    }
    public function hapusKategori()
    {
        $where = ['id_kategori' => $this->uri->segment(3)];
        $this->Modelbuku->hapusKategori($where);
        redirect('buku');
    }
}
