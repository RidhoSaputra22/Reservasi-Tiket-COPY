<?php
include("koneksi.php");
print_r($_POST);


// User

if(isset($_POST["delUser"])){
    $id = $_POST['id'];

    $Insert = "DELETE FROM tb_user WHERE `tb_user`.`id_user` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../index.php?halaman=user");
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// Kelas
if(isset($_POST["delDataKelas"])){
    $id = $_POST['id'];

    $Insert = "DELETE FROM tb_kelas WHERE id_tribun = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-kelas");
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// User
if(isset($_POST["delDataUser"])){
    $id = $_POST['id'];

    $Insert = "DELETE FROM tb_user WHERE id_user = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-user");
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// Pertandingan
if(isset($_POST["delDataPertandingan"])){
    $id = $_POST['id'];

    $Insert = "DELETE FROM tb_pertandingan WHERE id_pertandingan = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-pertandingan");
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

?>