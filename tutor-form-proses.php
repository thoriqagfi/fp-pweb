<?php
session_start();
include("koneksi.php");

// cek apakah tombol add course sudah diklik atau belum?
if(isset($_POST['tutor'])) {
    if(isset($_SESSION['loggedIn'])){
        if(!isset($_SESSION['name']) && $_SESSION['name'] != 'admin'){
            header('Location: index.php?status=noLog');
        }
    }
    // ambil data dari formulir
    $name = $_POST['name'];
    $age = $_POST['age'];
    $alumni_universitas = $_POST['alumni_universitas'];

    $tutor_name = mysqli_real_escape_string($db, $name);
    $tutor_age = mysqli_real_escape_string($db, $age);
    $tutor_alumni_universitas = mysqli_real_escape_string($db, $alumni_universitas);


    // buat query dengan prepared statement

    $query = "INSERT INTO tutors (name, age, alumni_universitas) VALUES ('".$tutor_name."','".$tutor_age."','".$tutor_alumni_universitas."')";
    $result = mysqli_query($db, $query);

    // apakah query simpan berhasil?
    if ($result) {
        header('Location: tutors.php');
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