<?php

// Load Config Database
require_once('config.php');

// Variable
$full_name = $_POST['full_name'];
$place_of_birth_id = $_POST['place_of_birth_id'];
$date_of_birth = $_POST['date_of_birth'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$last_education = $_POST['last_education'];
$religion = $_POST['religion'];
$hobby = $_POST['hobby'];

// Query Insert to Database Biodata
$query = "INSERT INTO biodata VALUES
('','$full_name','$date_of_birth','$place_of_birth_id','$phone_number','$address','$last_education','$religion','$hobby')";
$result = mysqli_query($conn, $query);

// Cek Keberhasilan
if ($query) {

    // Success Report
    echo "
        <script type='text/javascript'>
            alert('Biodata berhasil ditambahkan!');
            document.location.href='index.php';
        </script>
    ";
}
