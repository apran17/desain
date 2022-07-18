<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_barang          = $_POST['id_barang'];
$nama               = $_POST['nama'];
$stock              = $_POST['stock'];
$harga_modal        = $_POST['harga_modal'];
$harga_jual         = $_POST['harga_jual'];
$tanggal_masuk      = $_POST['tanggal_masuk'];

//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_barang SET nama = '$nama', stock = '$stock', harga_modal = '$harga_modal',
 harga_jual = '$harga_jual', tanggal_masuk ='$tanggal_masuk' WHERE id_barang = '$id_barang'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
