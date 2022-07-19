<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambah barang</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH BARANG
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number" name="stock" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga Modal</label>
                                <input type="number" name="harga_modal" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="number" name="harga_jual" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Id Kategori</label>
                                <?php
                                include '../koneksi.php';

                                $query = mysqli_query($connection, "SELECT * FROM tb_kategori");
                                $a = " ( ";
                                $b = " ) "; ?>
                                <select name="id_kategori" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['id_kategori'] . $a . $row['nama'] . $b; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Id Supplier</label>
                                <?php
                                include '../koneksi.php';

                                $query = mysqli_query($connection, "SELECT * FROM tb_supplier");
                                $a = " ( ";
                                $b = " ) "; ?>
                                <select name="id_supplier" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_supplier'] ?>"><?php echo $row['id_supplier'] . $a . $row['nama'] . $b; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" placeholder="" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>