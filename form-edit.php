<?php
 include "koneksi.php";
 $Idbarang=$_GET['Idbarang'];
 $query=mysqli_query($koneksi, "SELECT * FROM databarang WHERE Idbarang='$Idbarang'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          text-decoration: none;
          font-size: 13px;
    }
    </style>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="hidden" name="Idbarang" id="Idbarang" required="" value="<?php echo $result['Idbarang']; ?>" />
                    <input type="text" name="Kodebarang" id="Kodebarang" readonly required="" value="<?php echo $result['Kodebarang']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="Namabarang" id="Namabarang" autofocus="" required="" value="<?php echo $result['Namabarang']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>
                    <label>
                        <input type="radio" name="Jenisbarang" id="Jenisbarang" value="Baranglokal" required="" <?php if($result[ 'Jenisbarang']=="Baranglokal" ) echo "checked"; ?> />Barang Lokal</label>
                    <label>
                        <input type="radio" name="Jenisbarang" id="Jenisbarang" value="Import" required="" <?php if($result[ 'Jenisbarang']=="Import" ) echo "checked"; ?> />Barang Import</label>
                </td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>
                    <input type="text" name="Hargabarang" id="Hargabarangedit"  onkeyup="hitung_edit(this)" onKeyPress="return goodchars(event,'0123456789.',this)" autocomplete="off" required="" value="<?php echo $result['Hargabarang']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td>
                    <input type="text" name="Jumlahstok" id="Jumlahstokedit" onkeyup="hitung_edit(this)" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required="" value="<?php echo $result['Jumlahstok']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Total Harga Barang</td>
                <td>
                    <input type="text" name="Totalhargabarang" id="Totalhargabarangedit"  autocomplete="off" readonly required="" value="<?php echo $result['Totalhargabarang']; ?>" />
                </td>
            </tr>
            <tr>
            <td>Tanggal</td>
            <td>
                <input type="text" name="Tanggal" id="Tanggal" data-date-format="yyy-mm-dd" autocomplete="off" required="" value="<?php echo date("Y-m-d"); ?>"/>
            </td>
        </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</head>
</html>