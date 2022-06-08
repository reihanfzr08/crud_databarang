<?php 
    session_start();
    include 'koneksi.php';
 
    // tangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    //seleksi data pada tabel loginsistem dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM loginsistem WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:beranda.php");
    }
    else{
        header("location:login.php?pesan=gagal");
    }
?>


