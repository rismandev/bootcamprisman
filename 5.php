<?php

// Copyright 2019
// Powered by Risman

// n = Jumlah bintang yang muncul
$n = 20;

for ($a = 1; $a <= $n; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($c = 1; $c <= 1; $c++) {
        echo "*";
    }
    echo "<br>";
}
