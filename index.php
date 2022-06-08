<!DOCTYPE html>
<html>

<head>
    <title>UJIKOM CRUD DATA</title>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            //load data databarang saat aplikasi dijalankan 
            loadData();

            //Load form add
            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'form-add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //Load form edit dengan parameter Idbarang
            $("#contentData").on("click", "#EditButton", function() {
                var Idbarang = $(this).attr("value");
                $.ajax({
                    url: 'form-edit.php',
                    type: 'get',
                    data: {
                        Idbarang: Idbarang
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            //simpan data barang
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data mahasiswa
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data barang brdasarkan Idbarang
            $("#contentData").on("click", "#DeleteButton", function() {
                var Idbarang = $(this).attr("value");
                $.ajax({
                    url: 'proses.php?action=delete',
                    type: 'post',
                    data: {
                        Idbarang: Idbarang
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data-barang.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
        // fungsi untuk menghitung total harga barang pada form tambah
        function hitung_tambah(input) {
            var harga  = $('#Hargabarang').val();
            var jumlah = $('#Jumlahstok').val();

            if (jumlah=='') {
                var total = '';
            } else {
                var total = harga * jumlah;
            }
            $('#Totalhargabarang').val(total);
        }

        // fungsi untuk menghitung total harga barang pada form ubah
        function hitung_edit(input) {
            var harga  = $('#Hargabarangedit').val();
            var jumlah = $('#Jumlahstokedit').val();

            if (jumlah=='') {
                var total = '';
            } else {
                var total = harga * jumlah;
            }
            $('#Totalhargabarangedit').val(total);
        }

    </script>
</head>
<body>
    <div align="center">
        <h2>UJIKOM CRUD DATA</h2>
    <div align="right">
        <a href="logout.php">>>>LOGOUT<<<</a> <br>
        <a href="beranda.php">Kembali ke Halaman Utama---></a>
    </div>
        <div id="contentData"></div>
    </div>
</body>
</html>