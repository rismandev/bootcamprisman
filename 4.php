<?php

class HitungSalaman
{
    // Fungsi Hitung Jumlah Satu orang Salaman
    function satuOrang($jumlahOrang)
    {
        return $satuOrangSalaman =  $jumlahOrang - 1;
    }
    // Fungsi Hitung Jumlah Semua salaman
    function semuaOrang($jumlahSalaman, $jmlOrg)
    {
        $semuaOrangSalaman = $jumlahSalaman * $jmlOrg;
        return $semuaOrangSalaman / 2;
    }
}

// Instansiasi Objek
$hitungSalaman = new HitungSalaman();

// Menentukan Jumlah orang
$jmlOrg = 80;

// Memanggil Method
$satuOrang = $hitungSalaman->satuOrang($jmlOrg);
$semuaOrang = $hitungSalaman->semuaOrang($satuOrang, $jmlOrg);

// Tampilkan hasil
echo "Jumlah orang : " . $jmlOrg . "<br>Satu Orang " . $satuOrang . " kali Salaman";
echo "<br>Jumlah Salaman yang terjadi : " . $semuaOrang . " Salaman";
