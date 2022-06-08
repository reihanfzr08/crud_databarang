<!DOCTYPE HTML>
<html>
<head>
<body>
    <style type="text/css">
     * {
        font-family: "Trebuchet MS";
        background-color: mintcream;
      }
      h2 {
        text-transform: uppercase;
        color: salmon;
        text-align: center;
        font-size: 25px;
      }
      h4,h5 {
        text-transform: uppercase;
        color: royalblue;
        text-align: center;
        font-size: 18px;
      }
      p {
        text-transform: uppercase;
        color: green;
        text-align: left;
        font-size: 20px;
      }
    </style>

    <h2>Halaman Utama</h2><br>
    <!-- cek apakah sudah login -->
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:login.php?pesan=Teuacan_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Selamat Beraktivitas Yoo.</h4>
    <br/>
    <h5> REIHAN FAZRI ALDIANSYAH_18300017_DDT-30/18 </h5>
    <p> <-----MAIN MENU-----> </p><br>
    <a href="index.php">>>DATA BARANG<<</a>
     <br><br>
    <a href="logout.php" >>>LOGOUT<<</a>
</body>
</head>
</html>
