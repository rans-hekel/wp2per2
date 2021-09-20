<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihansatu extends CI_Controller
{

    public function index()
    {
        echo "<h1>Contoh Class</h1>";
    }

    // menggunakan Controller saja
    public function biodatasatu()
    {
        echo "<h1>perkenalkan</h1>";
        echo "<br>";
        echo "Nama : El Rangga Un Cahya";
    }

    // menggunakan view
    public function biodatadua()
    {
        $this->load->view("view_biodata");
    }

    // menggunakan controller dan model
    public function biodatatiga()
    {
        $this->load->model("model_biodata");
        $bio = $this->model_biodata->biodata(); //model
        echo "<h1>perkenalkan</h1>";
        echo "<br>";
        echo "Nama : " . $bio;
    }

    // menggunakan controller dan model
    public function biodataempat()
    {
        $this->load->model("model_biodata");
        $data['bio'] = $this->model_biodata->biodata(); //model
        $data['title'] = "Form Biodata";
        $this->load->view("view_biodata", $data); //view

    }
}
