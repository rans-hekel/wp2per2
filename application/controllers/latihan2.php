<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Latihan2 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang... selamat belajar web programming";
    }

    public function penjumlahan()
    {
        $nilai1 = 10;
        $nilai2 = 20;

        $penjumlahan = $nilai1 + $nilai2;

        echo "Hasil Penjumlahan " . $nilai1 . " + " . $nilai2 . " = " . $penjumlahan;
    }

    public function penjumlahan2()
    {
        $this->load->model('Model_latihan2');
        $hasil = $this->Model_latihan2->jumlah();

        echo "Hasil Penjumlahan " . $hasil;
    }

    public function penjumlahan3($n1, $n2)
    {
        $this->load->model('Model_latihan2');
        $hasil = $this->Model_latihan2->jumlah2($n1, $n2);

        echo "Hasil Penjumlahan " . $hasil;
    }

    public function penjumlahan4($n1 = null, $n2 = null)
    {
        $this->load->model('Model_latihan2');
        $hasil = $this->Model_latihan2->jumlah2($n1, $n2);
        $data['hasil'] = $hasil;

        $this->load->view("view_latihan2", $data);
    }
}
