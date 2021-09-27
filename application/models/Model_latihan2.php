<?php

class Model_latihan2 extends CI_Model
{
    public function jumlah()
    {
        $nilai1 = 10;
        $nilai2 = 20;

        $penjumlahan = $nilai1 + $nilai2;

        return $penjumlahan;
    }

    public function jumlah2($n1, $n2)
    {
        $nilai1 = $n1;
        $nilai2 = $n2;
        $penjumlahan = $nilai1 + $nilai2;
        return $penjumlahan;
    }
}
