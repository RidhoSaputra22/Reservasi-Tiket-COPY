<?php
include("koneksi.php");
print_r($_POST);

if(isset($_POST["regist"])){
    $namaDpn = $_POST['namaDpn'];
    $namaBlk = $_POST['namaBlk'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $hp = $_POST['hp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($namaDpn == "" || $namaBlk == "" || $alamat == "" || $hp == "" || $jk == "" || $username == "" || $password == ""){
        echo "<script>alert('Data tidak boleh kosong')</script>";
    }else{
        $Insert = "INSERT INTO `tb_user` (`id_user`, `namaDpn`, `namaBlk`, `alamat`, `hp`, `jk`, `username`, `password`) VALUES (NULL, '$namaDpn', '$namaBlk', '$alamat', ':$hp', '$jk', '$username', '$password')";

        if(mysqli_query($koneksi, $Insert)) {
            echo "<script>alert('BERHASIL')</script>";
            header("Location: ../login.php" );


        }else{
            echo "<script>alert('GAGAL')</script>";
        }
    }

    
}

if(isset($_POST["addDataTransaksi"])){
    $id_user = $_POST['id_user'];
    $id_pertandingan = $_POST['id_pertandingan'];
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $kategori = explode(',',$_POST['kategori'])[0];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    $Insert = "INSERT INTO `tb_transaksi` (`id_transaksi`, `id_user`, `id_pertandingan`, `id_kelas`, `status`, `nama`, `tanggal`) VALUES (NULL, '$id_user', '$id_pertandingan', '$kategori', '', '$name', '')";
    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../index.php?halaman=data-pesanan" );
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

if(isset($_POST["addDataPinjam"])){
    

    $namaBarang = $_POST['namaBarang'];
    $jmlBarang = $_POST['jmlBarang'];
    $suratPinjam = upload();


    if($namaBarang == "" || $jmlBarang == "" || $suratPinjam == false){
        echo "
        <script>
        window.alert('Data tidak boleh kosong atau format file salah');
        window.location.assign('../index.php?halaman=list-pinjaman');
        </script>";

    }else{
        $Insert = "INSERT INTO `tb_pinjam` (`id_pinjam`, `nm_pinjam`, `jml_pinjam`, `surat_pinjam`) VALUES (NULL, '$namaBarang', '$jmlBarang', '$suratPinjam');";

        if(mysqli_query($koneksi, $Insert)) {
            echo "<script>alert('BERHASIL')
                window.location.assign('../index.php?halaman=list-pinjaman');
                </script>";


        }else{
            echo "<script>alert('GAGAL')</script>";
        }
    }    
}

if(isset($_POST["addDataDipinjam"])){
    $namaBarang = $_POST['namaBarang'];
    $jmlBarang = $_POST['jmlBarang'];
    $suratDipinjam = upload();


    if($namaBarang == "" || $jmlBarang == "" || $suratDipinjam == false){
        echo "
        <script>
        window.alert('Data tidak boleh kosong atau format file salah');
        window.location.assign('../index.php?halaman=list-pinjaman');
        </script>";

    }else{
        $Insert = "INSERT INTO `tb_dipinjam` (`id_dipinjam`, `nm_dipinjam`, `jml_dipinjam`, `surat_dipinjam`) VALUES (NULL, '$namaBarang', '$jmlBarang', '$suratDipinjam')";

        if(mysqli_query($koneksi, $Insert)) {
            echo "<script>alert('BERHASIL')
                window.location.assign('../index.php?halaman=list-dipinjam');
                </script>";


        }else{
            echo "<script>alert('GAGAL')</script>";
        }
    }   

    
}

if(isset($_POST["addDataKelas"])){
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];

    $jml_kursi = $_POST['jml_kursi'];
    $bagian = $_POST['bagian'];
    $harga = $_POST['harga'];
    

    $Insert = "INSERT INTO `tb_kelas` (`id_tribun`, `jml_kursi`, `kelas`, `bagian`, `harga`) VALUES (NULL, '$jml_kursi', '$kelas', '$bagian', '$harga')";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-kelas" );
    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

if(isset($_POST["addDataPertandingan"])){
    $id = $_POST['id'];
    $pemain1 = $_POST['pemain1'];
    $pemain2 = $_POST['pemain2'];
    $tanggal = $_POST['tanggal'];
    $liga = $_POST['liga'];

    $Insert = "INSERT INTO `tb_pertandingan` (`id_pertandingan`, `pemain1`, `pemain2`, `tanggal`, `liga`) VALUES (NULL, '$pemain1', '$pemain2', '$tanggal', '$liga')";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-pertandingan");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}

if(isset($_POST["addDataUser"])){
    
    $id = $_POST['id'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $jk = $_POST['jk'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   

    $Insert = "INSERT INTO `tb_user` (`id_user`, `namaDpn`, `namaBlk`, `alamat`, `hp`, `jk`, `username`, `password`) VALUES (NULL, '$nama_depan', '$nama_belakang', '$alamat', '$hp', '$jk', '$username', '$password')";

    if(mysqli_query($koneksi, $Insert)) {
        echo "<script>alert('BERHASIL')</script>";
        header("Location: ../admin/index.php?halaman=data-user");



    }else{
        echo "<script>alert('GAGAL')</script>";
    }
}
?>