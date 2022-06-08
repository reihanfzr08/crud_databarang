<!DOCTYPE HTML>
<html>
<head>
    <title>Login_sistem</title>
</head>
<body>
    <style type="text/css"> 
      * {
        font-family: "Trebuchet MS";
        background-color: beige;
      }
      td {
        text-transform: uppercase;
        color: black;
      }
    input {
          background-color: darksalmon;
          color: #fff;
          text-decoration: none;
          font-size: 16px;
    }
    </style>

    <h3>SILAHKAN LOGIN UNTUK AKSES SISTEM !</h3>
    <!-- notifikasi -->
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Kamu telah berhasil logout";
            }
            else if($_GET['pesan'] == "Teuacan_login"){
                echo "kamu harus login untuk mengakses halaman beranda";
            }
        }
    ?>
    <br/>
    <form method="POST" action="proseslogin.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>            
    </form>
</body>
</html>