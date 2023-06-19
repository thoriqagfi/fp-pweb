<?php
session_start();
include("koneksi.php");

// cek apakah tombol signup sudah diklik atau belum?
if(isset($_POST['contact'])) {
    if(isset($_SESSION['loggedIn'])){
        if($_SESSION['loggedIn'] == false){
            header('Location: index.php?status=noLog');
        }
    }
    // ambil data dari formulir
    $judul_post = $_POST['subject'];
    $pesan_post = $_POST['message'];

    $judul = mysqli_real_escape_string($db, $judul_post);
    $pesan = mysqli_real_escape_string($db, $pesan_post);
    $user_id = mysqli_real_escape_string($db, $_SESSION['username']);


    // buat query dengan prepared statement

    $query = "INSERT INTO contact (judul, pesan, User_id) VALUES ('".$judul."','".$pesan."',".$user_id." )";
    $result = mysqli_query($db, $query);

    // apakah query simpan berhasil?
    if ($result) {
        header('Location: index.php');
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