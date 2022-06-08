<?php
include "koneksi.php";
switch ($_GET['action'])
{

    case 'save':

        $Kodebarang = $_POST['Kodebarang'];
        $Namabarang = $_POST['Namabarang'];
        $Jenisbarang = $_POST['Jenisbarang'];
        $Hargabarang = $_POST['Hargabarang'];
        $Jumlahstok = $_POST['Jumlahstok'];
        $Totalhargabarang = $_POST['Totalhargabarang'];
        $Tanggal = $_POST['Tanggal'];

        $query = mysqli_query($koneksi, "INSERT INTO databarang(Kodebarang, Namabarang, Jenisbarang, Hargabarang, Jumlahstok, Totalhargabarang, Tanggal) VALUES('$Kodebarang', '$Namabarang', '$Jenisbarang', '$Hargabarang', '$Jumlahstok', '$Totalhargabarang', '$Tanggal')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $Idbarang = $_POST['Idbarang'];
        $Kodebarang = $_POST['Kodebarang'];
        $Namabarang = $_POST['Namabarang'];
        $Jenisbarang = $_POST['Jenisbarang'];
        $Hargabarang = $_POST['Hargabarang'];
        $Jumlahstok = $_POST['Jumlahstok'];
        $Totalhargabarang = $_POST['Totalhargabarang'];
        $Tanggal = $_POST['Tanggal'];

        $query = mysqli_query($koneksi, "UPDATE databarang SET Kodebarang='$Kodebarang', Namabarang='$Namabarang', Jenisbarang='$Jenisbarang', Hargabarang='$Hargabarang', Jumlahstok='$Jumlahstok', Totalhargabarang='$Totalhargabarang', Tanggal='$Tanggal' WHERE Idbarang='$Idbarang'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $Idbarang = $_POST['Idbarang'];
        $query = mysqli_query($koneksi, "DELETE FROM databarang WHERE Idbarang='$Idbarang'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
