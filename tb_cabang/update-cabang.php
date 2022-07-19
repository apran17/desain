<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_cabang          = $_POST['id_cabang'];
$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$no_telp            = $_POST['no_telp'];
$email              = $_POST['email'];
$id_perusahaan      = $_POST['id_perusahaan'];

//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_cabang SET nama = '$nama', alamat = '$alamat', no_telp = '$no_telp', email = '$email', id_perusahaan = '$id_perusahaan' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
