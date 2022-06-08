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
<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Kode Barang</td>
            <td>
                <input type="text" name="Kodebarang" id="Kodebarang" required="" />
            </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>
                <input type="text" name="Namabarang" id="Namabarang" autofocus="" required="" />
            </td>
        </tr>
        <tr>
            <td>Jenis Barang</td>
            <td>
                <label>
                    <input type="radio" name="Jenisbarang" id="Jenisbarang" value="BarangLokal" required="" />Barang Lokal</label>
                <label>
                    <input type="radio" name="Jenisbarang" id="Jenisbarang" value="Import" required="" />Barang Import</label>
            </td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td>
                <input type="text" name="Hargabarang" id="Hargabarang" onkeyup="hitung_tambah(this)" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required="" />
            </td>
        </tr>
        <tr>
            <td>Jumlah Stok</td>
            <td> 
                <input type="text" name="Jumlahstok" id="Jumlahstok" onkeyup="hitung_tambah(this)" onKeyPress="return goodchars(event,'0123456789.',this)" autocomplete="off" required="" />
            </td>
        </tr>
        <tr>
            <td>Total Harga Barang</td>
            <td>
                <input type="text" name="Totalhargabarang" id="Totalhargabarang" autocomplete="off" readonly required="" />
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>
                <input type="text" name="Tanggal" id="Tanggal" data-date-format="yyy-mm-dd" autocomplete="off"  required="" value="<?php echo date("Y-m-d"); ?>"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>
</head>
</html>