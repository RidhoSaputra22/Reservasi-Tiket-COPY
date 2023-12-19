<?php
// include 'fungsi/koneksi.php';
// session_start();

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}else{
    header("Location: login.php");   
}
?>

<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../assets/DataTables/datatables.css">
<link rel="stylesheet" href="../assets/style.css">
<script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/DataTables/datatables.js"></script>

<div class="container-fluid ">
    <div class="row navbar">
        <div class="d-flex py-2 px-5">
            <div class="p-3 flex-grow-1" style="font-size: 40px; font-family: verdana">Tiketbola.com | Admin </div>
            <a href="./index.php" class="mt-3 px-3 btn d-none d-lg-block" style="font-size: 20px; height: fit-content;">Home</a>
            <a href="./index.php?halaman=data-pesanan" class="mt-3 px-3 btn d-none d-lg-block" style="font-size: 20px; height: fit-content;">Data Pemesanan</a>
            <div class="dropdown mt-3 d-none d-lg-block" >
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="font-size: 20px; height: fit-content; ">
                    <?= $name?>
                </button>   
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                    <a class="dropdown-item" href="../logout.php">Logout</a>
                    <a class="dropdown-item" href="index.php?halaman=profile">Profil</a>
                    <a class="dropdown-item" href="index.php?halaman=setting">Setting</a>
                </div>
            </div>
        </div>
    </div>
</div>

