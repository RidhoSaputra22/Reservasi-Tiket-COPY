<?php
if(isset($_GET['halaman'])){
    $halaman = $_GET['halaman'];
}else{
    $halaman = '';
}

?>


<div class="col-3 sidebar py-3 d-none d-lg-block">
    <div style="height: 90vh">
    <p style="font-size: 30px;">Pertandingan</p>
    <a style="font-size: 18.5px;" href="index.php?halaman=data-user" class="btn <?= ($halaman == 'data-user') ? "sidebarActive" : ""?>">Data User</a></p>
    <a style="font-size: 18.5px;" href="index.php?halaman=data-pertandingan"class="btn <?= ($halaman == 'data-pertandingan') ? "sidebarActive" : ""?>">Data Pertandingan</a></p>
    <a style="font-size: 18.5px;" href="index.php?halaman=data-kelas" class="btn <?= ($halaman == 'data-kelas') ? "sidebarActive" : ""?>">Data Kelas</a></p>
    </div>

    <span class="d-flex align-items-end ">&#169; Ridho Saputra - DIMENSI</span>
</div>