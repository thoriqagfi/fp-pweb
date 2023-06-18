<?php

include("koneksi.php");

// cek apakah tombol signup sudah diklik atau belum?
if(isset($_POST['signup'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // buat query dengan prepared statement
    $sql = "INSERT INTO User (name, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);

    // bind parameter ke prepared statement
    mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $password);

    // eksekusi prepared statement
    $result = mysqli_stmt_execute($stmt);

    // apakah query simpan berhasil?
    if ($result) {
        // jika berhasil, alihkan ke halaman sukses.php
        header('Location: login.php');
    } else {
        // jika gagal, alihkan kembali ke halaman sebelumnya dengan status gagal
        header('Location: index.php?status=gagal');
    }

    // tutup statement
    mysqli_stmt_close($stmt);

} else {
    die("Akses dilarang...");
}

?>
