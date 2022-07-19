<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Data Cabang</title>
</head>

<body>
    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">HOME</a>
                    <a class="navbar-brand" href="#">BARANG</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="nav-link" href="../tb_kategori/index.php">KATEGORI</a>
                    <a class="nav-link" href="../tb_supplier/index.php">SUPPLIER</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- End Example Code -->

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA CABANG
                    </div>
                    <div class="card-body">
                        <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Id Perusahaan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection, "SELECT * FROM tb_cabang");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['alamt'] ?></td>
                                        <td><?php echo $row['no_telp'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['id_perusahaan'] ?></td>
                                        <td class="text-center">
                                            <a href="edit-cabang.php?id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-cabang.php?id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>