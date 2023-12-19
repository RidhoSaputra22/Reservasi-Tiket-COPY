<?php
    $data = viewData("SELECT * FROM tb_pertandingan");

?>
<div class="d-flex">
    <h1 class="py-2" style="font-size: 3rem">Selamat Datang</h1>

</div>

<hr>

<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem; background-color: var(--secondary-color)">
            <div class="card-body">
                <h5 class="card-title pb-3" style="color: var(--forth-color); font-size: 28px" >Data User</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, non.</p>
                <a href="index.php?halaman=data-user" class="btn btn-primary mt-1">Send Me</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; background-color: var(--secondary-color)">
            <div class="card-body">
                <h5 class="card-title pb-3" style="color: var(--forth-color); font-size: 28px" >Data Pertandingan</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, non.</p>
                <a href="index.php?halaman=data-pertandingan" class="btn btn-primary mt-1">Send Me</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; background-color: var(--secondary-color)">
            <div class="card-body">
                <h5 class="card-title pb-3" style="color: var(--forth-color); font-size: 28px" >Data Kelas</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, non.</p>
                <a href="index.php?halaman=data-kelas" class="btn btn-primary mt-1">Send Me</a>
            </div>
        </div>
    </div>




</div>