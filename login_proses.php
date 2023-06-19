<?php
session_start();
include("koneksi.php");

// cek apakah tombol signup sudah diklik atau belum?
if(isset($_POST['login'])) {

    // ambil data dari formulir
    $email = $_POST["email"];
    $password = $_POST["password"];

    // buat query dengan prepared statement
    $query = "SELECT * FROM user WHERE email = '$email'";

    // eksekusi prepared statement
    $result = mysqli_query($db, $query);

    // apakah query simpan berhasil?
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result);
        if($row['password'] == $password){
            $_SESSION['username'] = $row['id'];
            $_SESSION['loggedIn'] = true;
            // jika berhasil, alihkan ke halaman sukses.php
            header('Location: index.php?status=logsuc');
        }else{
            header('Location: login.php?status=logfail');
        }

    } else {
        // jika gagal, alihkan kembali ke halaman sebelumnya dengan status gagal
        header('Location: login.php?status=logfail');
    }

    // tutup statement
    //mysqli_stmt_close($stmt);

} else {
    die("Akses dilarang...");
}

?>
