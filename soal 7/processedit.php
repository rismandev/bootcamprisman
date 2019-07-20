<?php

// Load Config
require_once('config.php');

// Set Variable
$id = $_GET['id'];
$full_name = $_POST['full_name'];
$place_of_birth_id = $_POST['place_of_birth_id'];
$date_of_birth = $_POST['date_of_birth'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$last_education = $_POST['last_education'];
$religion = $_POST['religion'];
$hobby = $_POST['hobby'];

// Query To Database
$query = "UPDATE biodata SET full_name = '$full_name', date_of_birth = '$date_of_birth', place_of_birth_id = '$place_of_birth_id', phone_number = '$phone_number', address = '$address', last_education = '$last_education', religion = '$religion', hobby = '$hobby' WHERE id = '$id'";
$result = mysqli_query($conn, $query);

// Cek Keberhasilan
if ($query) {

    // Success Report
    echo "
        <script type='text/javascript'>
            alert('Biodata berhasil diubah!');
            document.location.href='index.php';
        </script>
    ";
}
