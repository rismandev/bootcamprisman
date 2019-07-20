<?php

class HitungSalaman
{
    function satuOrang($jumlahOrang)
    {
        return $satuOrangSalaman =  $jumlahOrang - 1;
    }
    function semuaOrang($jumlahSalaman)
    {
        return $semuaOrangSalaman = $jumlahSalaman * 2;
    }
}

$hitungSalaman = new HitungSalaman();

// Menentukan Jumlah orang
$jmlOrg = 40;

$satuOrang = $hitungSalaman->satuOrang($jmlOrg);
$semuaOrang = $hitungSalaman->semuaOrang($satuOrang);

// Tampilkan hasil
echo "Jumlah orang : " . $jmlOrg . "<br>Setiap Orang " . $satuOrang . "x Salaman";
echo "<br>Jumlah Salaman yang terjadi : " . $semuaOrang;
