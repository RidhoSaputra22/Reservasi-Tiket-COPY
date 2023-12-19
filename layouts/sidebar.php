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
    <a style="font-size: 18.5px;" href="index.php?halaman=liga1" class="btn <?= ($halaman == 'liga1') ? "sidebarActive" : ""?>">Liga 1</a></p>
    <a style="font-size: 18.5px;" href="index.php?halaman=liga2"class="btn <?= ($halaman == 'liga2') ? "sidebarActive" : ""?>">Liga 2</a></p>
    <a style="font-size: 18.5px;" href="index.php?halaman=liga3" class="btn <?= ($halaman == 'liga3') ? "sidebarActive" : ""?>">Liga 3</a></p>
    </div>

    <span class="d-flex align-items-end ">&#169; Ridho Saputra - DIMENSI</span>
</div>