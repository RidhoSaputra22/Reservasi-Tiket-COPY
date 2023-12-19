<?php
    $data = viewData("SELECT * FROM tb_pertandingan");

?>
<div class="d-flex">
    <h1 class="pb-4" style="font-size: 3rem">Pertandingan</h1>

</div>

<div class="col ">
    <div class="row d-flex row-cols-5 overflow-y-scroll" style="height: 85vh">

        <?php while($r = mysqli_fetch_assoc($data)){
                        $tanggal = date('d F Y', strtotime($r['tanggal']));
                        $id = $r['id_pertandingan'];
                        ?>


        <div class="col mt-3 pb-3">

            <div class="card" style="width: 250px; height:430px  ">
                <img src="assets/liga-bri.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: var(--secondary-color);">
                    <h5 class="card-title" style="color: var(--forth-color);"><?= $r['pemain1']?> VS <?= $r['pemain2']?>
                    </h5>
                    <p class="card-text"><?= $tanggal?></p>
                    <div class="justify-content-end">
                        <a href="reservasi.php?id=<?= $id?>" class="btn btn-primary d-inlined">Buy</a>
                    </div>
                </div>
            </div>

        </div>

        <?php
                    }?>


    </div>




</div>