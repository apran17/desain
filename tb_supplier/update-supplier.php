<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_supplier            = $_POST['id_supplier'];
$nama                   = $_POST['nama'];
$no_telp                = $_POST['no_telp'];
$alamat                 = $_POST['alamat'];
$no_rekening            = $_POST['no_rekening'];


//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_supplier SET nama = '$nama', no_telp = '$no_telp', alamat = '$alamat',
 no_rekening = '$no_rekening' WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
