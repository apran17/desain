<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama                   = $_POST['nama'];
$alamat                 = $_POST['alamat'];
$no_telp                = $_POST['no_telp'];
$email                  = $_POST['email'];
$tanggal_berdiri        = $_POST['tanggal_berdiri'];
$npwp                   = $_POST['npwp'];


//query insert data ke dalam database
$query = "INSERT INTO tb_perusahaan (nama, alamat, no_telp, email, tanggal_berdiri, npwp )
VALUES ('$nama', '$alamat', '$no_telp', '$email', '$tanggal_berdiri', '$npwp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
