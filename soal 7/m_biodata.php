<?php

// Load Config Database
require_once('config.php');

// Method Untuk Mengambil List Biodata & Cities
function getBiodata()
{
    global $conn;
    $query = "SELECT * FROM biodata JOIN cities ON biodata.place_of_birth_id = cities.cities_id ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Method untuk Mengambil data cities
function getCities()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM cities");
    return $result;
}

// Method untuk mengambil biodata berdasarkan id
function getBiodataById($id)
{
    global $conn;
    $query = "SELECT * FROM biodata JOIN cities ON biodata.place_of_birth_id = cities.cities_id WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    // Ubah kedalam Array Asosiatif
    $result = mysqli_fetch_assoc($result);
    return $result;
}
