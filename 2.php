<?php

// Cek Jika Tombol Validasi Sudah ditekan 
if (isset($_POST['submit'])) {

    // Menangkap Masukan pada form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Mengubah isi form menjadi kecil semua
    $lowerCaseUsername = strtolower($username);
    $lowerCaseEmail = strtolower($email);

    // Cek Apakah Username dan email Kosong
    if ($username == NULL || $email == NULL) {
        // beritahu error
        echo "
            <script type='text/javascript'>
                alert('Isi Kolom!');
            </script>
            ";
    } else {
        // Cek Huruf pada Username
        if ($username != $lowerCaseUsername) {
            // beritahu error
            echo "
                <script type='text/javascript'>
                    alert('Invalid Username!');
                </script>
            ";
        }
        // Cek Format Email
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email != $lowerCaseEmail) {
            // beritahu error
            echo "
                <script type='text/javascript'>
                    alert('Email tidak valid!');
                </script>
            ";
        }
        // Jika tidak error Maka Tampilkan Username dan Email
        else {
            echo "Username : " . $username . "<br><br>Email : " . $email . "<br><br>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Form Validasi</title>
</head>

<body>
    <!-- Form -->
    <form action="" method="post">
        <!-- Username -->
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" minlength="8">
        <br><br>
        <!-- Email -->
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
        <br><br>
        <!-- Button -->
        <input type="submit" value="Validasi" name="submit">
    </form>

</body>

</html>