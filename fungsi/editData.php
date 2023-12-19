<?php
include("koneksi.php");
print_r($_POST);


// User
if(isset($_POST["editUser"])){
    $id = $_POST['id'];
    $namaDpn = $_POST['namaDpn'];
    $namaBlk = $_POST['namaBlk'];

    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $jk = $_POST['jk'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $Insert = "UPDATE `tb_user` SET `namaDpn` = '$namaDpn', `namaBlk` = '$namaBlk', `alamat` = '$alamat', `hp` = '$hp', `jk` = '$jk', `username` = '$username', `password` = '$password' WHERE `id_user` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=user");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// Tema
if(isset($_POST["themes"])){
    $id = $_POST['idUser'];
    $theme = strtolower(substr($_POST['themes'], 1));

   

    $Insert = "UPDATE `tb_user` SET `theme` = '$theme' WHERE `id_user` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../index.php?halaman=setting");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// Kelas
if(isset($_POST["editDataKelas"])){
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];
    $jml_kursi = $_POST['jml_kursi'];
    $bagian = $_POST['bagian'];
    $harga = $_POST['harga'];
   

    $Insert = "UPDATE `tb_kelas` SET `jml_kursi` = '$jml_kursi', `kelas` = '$kelas', `bagian` = '$bagian' WHERE `tb_kelas`.`id_tribun` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-kelas");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

// User
if(isset($_POST["editDataUser"])){
    $id = $_POST['id'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['ala$alamat'];
    $hp = $_POST['hp'];
    $jk = $_POST['jk'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   

    $Insert = "UPDATE `tb_user` SET `namaDpn` = '$nama_depan', `namaBlk` = '$nama_belakang', `alamat` = '$alamat', `hp` = '$hp', `jk` = '$jk', `username` = '$username', `password` = '$password' WHERE `tb_user`.`id_user` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-user");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

if(isset($_POST["editDataPertandingan"])){
    $id = $_POST['id'];
    $pemain1 = $_POST['pemain1'];
    $pemain2 = $_POST['pemain2'];
    $tanggal = $_POST['tanggal'];
    $liga = $_POST['liga'];

    $Insert = "UPDATE `tb_pertandingan` SET `pemain1` = '$pemain1', `pemain2` = '$pemain2', `tanggal` = '$tanggal', `liga` = '$liga' WHERE `tb_pertandingan`.`id_pertandingan` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-pertandingan");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

if(isset($_POST["editDataPesanan"])){
    $id = $_POST['id'];
     // Set the timezone to Asia/Jakarta (or your preferred timezone)
     date_default_timezone_set('Asia/Jakarta');

     // Get the current date
     $currentDate = date('j F Y');
 
     // Convert the month name to Indonesian
     $monthNamesIndonesian = [
         'January' => 'Januari',
         'February' => 'Februari',
         'March' => 'Maret',
         'April' => 'April',
         'May' => 'Mei',
         'June' => 'Juni',
         'July' => 'Juli',
         'August' => 'Agustus',
         'September' => 'September',
         'October' => 'Oktober',
         'November' => 'November',
         'December' => 'Desember',
     ];
 
     // Replace the English month name with the Indonesian equivalent
     foreach ($monthNamesIndonesian as $englishMonth => $indonesianMonth) {
         $currentDate = str_replace($englishMonth, $indonesianMonth, $currentDate);
     }

    $Insert = "UPDATE `tb_transaksi` SET `status` = 'confirmed', `tanggal` = '$currentDate' WHERE `tb_transaksi`.`id_transaksi` = $id";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-pesanan");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}




?>