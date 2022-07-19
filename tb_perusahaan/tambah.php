<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambah Perusahaan</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH PERUSAHAAN
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="number" name="no_telp" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Berdiri</label>
                                <input type="date" name="tanggal_berdiri" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Npwp</label>
                                <input type="number" name="npwp" placeholder="" class="form-control">
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