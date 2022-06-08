<!DOCTYPE html>
<html>
  <head>
<!-------------css---------------------->
    <style type="text/css"> 
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    button {
          padding: 5px;
          text-decoration: none;
          font-size: 13px;
    }
    </style>
  </head>
  <!--------------------------------------------------------------->
<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Stok</th>
            <th>Total Harga Barang</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM databarang ORDER BY Idbarang DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                <td>
                    <?php echo $result['Kodebarang']; ?>
                </td>
                <td>
                    <?php echo $result['Namabarang']; ?>
                </td>
                <td>
                    <?php echo $result['Jenisbarang']; ?>
                </td>
                <td>Rp. 
                    <?php echo number_format($result['Hargabarang'],0,',','.'); ?>
                </td>
                <td>
                    <?php echo $result['Jumlahstok']; ?>
                </td>
                 <td>Rp.
                    <?php echo number_format($result['Totalhargabarang'],0,',','.'); ?>
                </td>
                <td>
                    <?php echo $result['Tanggal']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['Idbarang']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['Idbarang']; ?>" onclick="return confirm('yakin ingin menghapus data ini ?')">Delete</button>
                </td>
            </tr>   
      <?php

   }
  ?>
    </tbody>
</table>
</html>