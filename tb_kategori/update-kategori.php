<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_kategori            = $_POST['id_kategori'];
$nama                   = $_POST['nama'];

//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kategori SET nama = '$nama' WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
