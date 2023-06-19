<?php
session_start();
include("koneksi.php");

// cek apakah tombol add course sudah diklik atau belum?
if(isset($_POST['course'])) {
    if(isset($_SESSION['loggedIn'])){
        if(!isset($_SESSION['name']) && $_SESSION['name'] != 'admin'){
            header('Location: index.php?status=noLog');
        }
    }
    // ambil data dari formulir
    $name = $_POST['name'];
    $textarea = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $durasi = $_POST['durasi'];

    $course_name = mysqli_real_escape_string($db, $name);
    $deskripsi = mysqli_real_escape_string($db, $textarea);
    $course_harga = mysqli_real_escape_string($db, $harga);
    $course_durasi = mysqli_real_escape_string($db, $durasi);


    // buat query dengan prepared statement

    $query = "INSERT INTO courses (name, deskripsi, harga, durasi) VALUES ('".$course_name."','".$deskripsi."','".$course_harga."','".$course_durasi."')";
    $result = mysqli_query($db, $query);

    // apakah query simpan berhasil?
    if ($result) {
        header('Location: courses.php');
    } else {
        // jika gagal, alihkan kembali ke halaman sebelumnya dengan status gagal
        header('Location: index.php?status=addfail');
    }

    // tutup statement
    mysqli_stmt_close($stmt);

} else {
    die("Akses dilarang...");
}
?>