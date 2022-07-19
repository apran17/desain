<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_perusahaan      = $_POST['id_perusahaan'];
$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$no_telp            = $_POST['no_telp'];
$email              = $_POST['email'];
$tanggal_berdiri    = $_POST['tanggal_berdiri'];
$npwp               = $_POST['npwp'];

//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_perusahaan SET nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', email = '$email', tanggal_berdiri = '$tanggal_berdiri', npwp = '$npwp' WHERE id_perusahaan = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
