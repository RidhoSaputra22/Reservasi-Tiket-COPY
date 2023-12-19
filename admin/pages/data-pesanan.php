<?php
$PAGE = "Pesanan";
$data = viewData("SELECT * FROM tb_transaksi JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user JOIN tb_pertandingan ON tb_transaksi.id_pertandingan = tb_pertandingan.id_pertandingan JOIN tb_kelas ON tb_transaksi.id_kelas = tb_kelas.id_tribun;")

?>


<div class="container py-5">
    <div class="row">
        <p style="font-size: 50px">Welcome <?= $_SESSION['name']?></p>
        <!-- CONTENT -->
        <div class=" ">
            <table id="myTable" class="display responsive " width="100%">
                <thead>
                    <tr>
                        <th>Nama </th>
                        <th>Tanggal </th>
                        <th>Kelas</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r = mysqli_fetch_assoc($data)){
                    $id_transaksi = $r['id_transaksi'];
                    $id_user = $r['id_user'];
                    $pemain1 = $r['pemain1'];
                    $pemain2 = $r['pemain2'];
                    $tanggal = $r['tanggal'];
                    $kelas = $r['kelas'];
                    $harga = $r['harga'];
                    $status = $r['status'];


                    ?>

                    <tr class="trows">
                        <td><?= $pemain1?> Vs <?= $pemain2?></td>
                        <td><?= $tanggal?></td>
                        <td><?= $kelas?></td>
                        <td><?= $harga?></td>
                        <td><?= ($status == "confirmed")? "Confirmed!": "<button type='button' class='btn btn-primary del' data-bs-toggle='modal'
                                data-bs-target='#CONFIRM$id_transaksi'>
                                Confirm?
                            </button>"?></td>
                        
                    </tr>

                    <!-- MODAL CONFRIM -->
                    <div class="modal fade" id="CONFIRM<?= $id_transaksi?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">Confrim: <?= $pemain1?> <?= $pemain2?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/editData.php" method="post">
                                    <input type="text" value="<?= $id_transaksi?>" name="id" style="display: none">

                                    <div class="modal-body">
                                        <h1 class="fs-5">Anda Yakin Ingin Confrim?</h1>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="editData<?= $PAGE?>">Iya</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <?php

                }?>
                </tbody>
            </table>
        </div>
    </div>
</div>