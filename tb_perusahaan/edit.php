<?php

include('../koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tb_perusahaan WHERE id_perusahaan = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit Perusahaan</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT PERUSAHAAN
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
                                <input type="hidden" name="id_perusahaan" value="<?php echo $row['id_perusahaan'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="number" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Telp</label>
                                <input type="number" name="no_telp" value="<?php echo $row['no_telp'] ?>" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Berdiri</label>
                                <input type="date" name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Npwp</label>
                                <input type="number" name="npwp" value="<?php echo $row['npwp'] ?>" placeholder="" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-success">UPDATE</button>
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