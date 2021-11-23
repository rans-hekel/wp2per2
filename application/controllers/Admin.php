<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->Modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->Modeluser->getUserLimit()->result_array();
        $data['buku'] = $this->Modelbuku->getBuku()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
