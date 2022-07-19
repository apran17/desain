<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama                   = $_POST['nama'];
$alamat                 = $_POST['alamat'];
$no_telp                = $_POST['no_telp'];
$email                  = $_POST['email'];
$id_perusahaan          = $_POST['id_perusahaan'];


//query insert data ke dalam database
$query = "INSERT INTO tb_cabang (nama, alamat, no_telp, email, id_perusahaan )
VALUES ('$nama', '$alamat', '$no_telp', '$email', '$id_perusahaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
