<?php
session_start();
include("koneksi.php");

// cek apakah tombol signup sudah diklik atau belum?
if(isset($_POST['admission'])) {
    if(isset($_SESSION['loggedIn'])){
        if($_SESSION['loggedIn'] == false){
            header('Location: index.php?status=noLog');
        }
    }
    // ambil data dari formulir
    $courseid = $_POST['course'];
    $currentDate = date('Y-m-d');

    // buat query dengan prepared statement

    $query = "INSERT INTO admission (tanggal_daftar, User_id, courses_id) VALUES ('".$currentDate."',".$_SESSION['username'].",".$courseid." )";
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
