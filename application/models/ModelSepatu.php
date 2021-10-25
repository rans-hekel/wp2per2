<?php

class ModelSepatu extends CI_Model
{
    public $merk, $harga;
    public function getmerk($merk = null)
    {
        $this->merk = $merk;
        if ($this->merk == "nike") {
            $this->harga = 375000;
        } elseif ($this->merk == "adidas") {
            $this->harga = 300000;
        } elseif ($this->merk == "kickers") {
            $this->harga = 250000;
        } elseif ($this->merk == "eiger") {
            $this->harga = 275000;
        } elseif ($this->merk == "bucherri") {
            $this->harga = 400000;
        }
        return $this->harga;
    }
}
