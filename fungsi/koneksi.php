<?php

$koneksi = mysqli_connect("localhost","root","","db_penjualan_tiket_bola");

function viewData($query, $single = false){
    global $koneksi;    
    $result = mysqli_query($koneksi, $query);
    if($single == true){
        return mysqli_fetch_assoc($result);
    }
    return $result;
}

function upload()
{
    print_r($_FILES);
    // return false;
    $namaFile = $_FILES['file']['name'];
    // $ukuranFile = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tmpName = $_FILES['file']['tmp_name'];
    // cek jika tidak ada file diupload

    // cek yang boleh diupload
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));

    // lolos pengecekan
    //generate
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;
    move_uploaded_file($tmpName, '../assets/surat_keterangan/' . $namaFileBaru);
    return $namaFileBaru;

}



?>