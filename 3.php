<?php

// Class cari Tanggal
class CariTanggal
{

    public function searchDate($start, $end)
    {
        // Membuat Format Tanggal
        $awal = date_create($start);
        $akhir = date_create($end);

        // Selisih Tanggal
        $diff = date_diff($awal, $akhir);

        // Memasukan selisih ke Variable
        $date = $diff->d;

        // Tampilkan Waktu Mulai
        echo $start;

        for ($i = 1; $i < $date; $i++) {
            // Cetak Selisih
            $selisihAkhir = date('Y-m-d', strtotime("+$i day", strtotime($start)));
            echo "&nbsp;" . $selisihAkhir . "&nbsp;";
        }

        // Tampilkan Waktu Akhir
        echo $end;
    }
}

// Instansiasi Objek
$date = new CariTanggal();

// Memanggil Method 
$date->searchDate('2018-11-01', '2018-11-05');
