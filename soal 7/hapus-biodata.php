<?php

// Load Config Database
require_once('config.php');

// Get ID by URL
$id = $_GET['id'];

// Query For Delete Data
$query = "DELETE FROM biodata WHERE id = '$id'";
$result = mysqli_query($conn, $query);

// Cek Keberhasilan
if ($result) {
    // Success Report
    echo "
        <script type='text/javascript'>
            alert('Biodata berhasil dihapus!');
            document.location.href='index.php';
        </script>
    ";
}
