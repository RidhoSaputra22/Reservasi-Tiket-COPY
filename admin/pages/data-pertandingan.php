<?php
$PAGE = "Pertandingan";
$data = viewData("SELECT * FROM tb_pertandingan")

?>


<div class="container py-2">
    <div class="row">
        <p style="font-size: 50px">Data <?= $PAGE?></p>

        <!-- CONTENT -->
        <div class=" ">
            <!-- ADD BTN -->
            <button type="button" class="btn p-3" data-bs-toggle="modal" data-bs-target="#ADD">
                Tambah Data +
            </button>
            <table id="myTable" class="display responsive " width="100%">
                <thead>
                    <tr>
                        <th>Nama </th>
                        <th>Tanggal </th>
                        <th>Liga</th>
                        <th>Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r = mysqli_fetch_assoc($data)){
                    $id_pertandingan = $r['id_pertandingan'];
                    $pemain1 = $r['pemain1'];
                    $pemain2 = $r['pemain2'];
                    $tanggal = $r['tanggal'];
                    $liga = $r['liga'];
                    ?>

                    <tr class="trows">
                        <td><?= $pemain1?> <?= $pemain2 ?></td>
                        <td><?= $tanggal?></td>
                        <td><?= $liga?></td>
                        <td>
                            <!-- EDIT BTN -->
                            <button type="button" class="btn edit" data-bs-toggle="modal"
                                data-bs-target="#EDIT<?= $id_pertandingan?>">
                                EDIT
                            </button>
                            <!-- DELETE BTN -->
                            <button type="button" class="btn del" data-bs-toggle="modal"
                                data-bs-target="#DELETE<?= $id_pertandingan?>">
                                DELETE
                            </button>
                        </td>



                    </tr>

                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="EDIT<?= $id_pertandingan?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit: <?= $pemain1?> VS
                                        <?= $pemain2?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/editData.php" method="post">
                                    <input type="text" value="<?= $id_pertandingan?>" name="id" style="display: none">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="username" class="pb-2">Pemain 1</label>
                                            <input type="text" class="form-control" id="username" name="pemain1"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $pemain1?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Pemain 2</label>
                                            <input type="text" class="form-control" id="username" name="pemain2"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $pemain2?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Tanggal</label>
                                            <input type="date" class="form-control" id="username" name="tanggal"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $tanggal?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Liga</label>
                                            <input type="text" class="form-control" id="username" name="liga"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $liga?>" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="editData<?= $PAGE?>">Simpan</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL DELETE -->
                    <div class="modal fade" id="DELETE<?= $id_pertandingan?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">Hapus: <?= $pemain1?>
                                        <?= $pemain2?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/delData.php" method="post">
                                    <input type="text" value="<?= $id_pertandingan?>" name="id" style="display: none">

                                    <div class="modal-body">
                                        <h1 class="fs-5">Anda Yakin Ingin Menghapus?</h1>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="delData<?= $PAGE?>">Iya</button>
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

<div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data +</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../fungsi/addData.php" method="post">
                <input type="text" name="id" style="display: none">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username" class="pb-2">Pemain 1</label>
                        <input type="text" class="form-control" id="username" name="pemain1"
                            style="background-color: var(--primary-color); color: var(--forth-color)" required>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Pemain 2</label>
                        <input type="text" class="form-control" id="username" name="pemain2"
                            style="background-color: var(--primary-color); color: var(--forth-color)" required>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Tanggal</label>
                        <input type="date" class="form-control" id="username" name="tanggal"
                            style="background-color: var(--primary-color); color: var(--forth-color)" required>
                    </div>

                    <div class="form-group">
                        <label for="role" class="py-2">Liga</label>
                        <select class="form-control input-from" id="role" name="liga" style="background-color: var(--primary-color); color: var(--forth-color)">
                            <option value="liga1" class="input-from">Liga 1</option>
                            <option value="liga2" class="input-from">Liga 2</option>
                            <option value="liga3" class="input-from">Liga 3</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="addData<?= $PAGE?>">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>