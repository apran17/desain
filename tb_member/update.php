<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_member              = $_POST['id_member'];
$nama                   = $_POST['nama'];
$no_telp                = $_POST['no_telp'];
$alamat                 = $_POST['alamat$alamat'];
$jenis_kelamin          = $_POST['jenis_kelamin'];

//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_member SET nama = '$nama', no_telp = '$no_telp', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin'  WHERE id_member = '$id_member'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
