<?php

class HitungSalaman
{
    function satuOrang($jumlahOrang)
    {
        return $satuOrangSalaman =  $jumlahOrang - 1;
    }
    function semuaOrang($jumlahSalaman, $jmlOrg)
    {
        $semuaOrangSalaman = $jumlahSalaman * $jmlOrg;
        return $semuaOrangSalaman / 2;
    }
}

$hitungSalaman = new HitungSalaman();

// Menentukan Jumlah orang
$jmlOrg = 80;

$satuOrang = $hitungSalaman->satuOrang($jmlOrg);
$semuaOrang = $hitungSalaman->semuaOrang($satuOrang, $jmlOrg);

// Tampilkan hasil
echo "Jumlah orang : " . $jmlOrg . "<br>Satu Orang " . $satuOrang . " kali Salaman";
echo "<br>Jumlah Salaman yang terjadi : " . $semuaOrang . " Salaman";
