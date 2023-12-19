<?php
$PAGE = "Kelas";
$data = viewData("SELECT * FROM tb_kelas")

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
                        <th>Kelas </th>
                        <th>Jumlah Kursi </th>
                        <th>Bagian</th>
                        <th>Harga</th>
                        <th>Aksi</th>



                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r = mysqli_fetch_assoc($data)){
                    $id_tribun = $r['id_tribun'];
                    $kelas = $r['kelas'];
                    $jml_kursi = $r['jml_kursi'];
                    $bagian = $r['bagian'];
                    $harga = $r['harga'];
                  
                    ?>

                    <tr class="trows">
                        <td><?= $kelas?></td>
                        <td><?= $jml_kursi?></td>
                        <td><?= $bagian?></td>
                        <td><?= $harga?></td>
                        <td>
                            <!-- EDIT BTN -->
                            <button type="button" class="btn edit" data-bs-toggle="modal"
                                data-bs-target="#EDIT<?= $id_tribun?>">
                                EDIT
                            </button>
                            <!-- DELETE BTN -->
                            <button type="button" class="btn del" data-bs-toggle="modal"
                                data-bs-target="#DELETE<?= $id_tribun?>">
                                DELETE
                            </button>
                        </td>
                    </tr>

                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="EDIT<?= $id_tribun?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit: <?= $kelas?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/editData.php" method="post">
                                    <input type="text" value="<?= $id_tribun?>" name="id" style="display: none">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="username" class="pb-2">Kelas</label>
                                            <input type="text" class="form-control" id="username" name="kelas"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $kelas?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Jumlah Kursi</label>
                                            <input type="number" class="form-control" id="username" name="jml_kursi"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $jml_kursi?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Bagian</label>
                                            <input type="text" class="form-control" id="username" name="bagian"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $bagian?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Harga</label>
                                            <input type="number" class="form-control" id="username" name="harga"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $harga?>" required>
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
                    <div class="modal fade" id="DELETE<?= $id_tribun?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">Hapus: <?= $kelas?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/delData.php" method="post">
                                    <input type="text" value="<?= $id_tribun?>" name="id" style="display: none">

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

<!-- MODAL ADD -->
<div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data + </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../fungsi/addData.php" method="post">
                <input type="text" name="id" style="display: none">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username" class="pb-2">Kelas</label>
                        <input type="text" class="form-control" id="username" name="kelas"
                            style="background-color: var(--primary-color); color: var(--forth-color)" required>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="username" class="py-2">Jumlah Kursi</label>
                            <input type="number" class="form-control" id="username" name="jml_kursi"
                                style="background-color: var(--primary-color); color: var(--forth-color)" required>
                        </div>

                        <div class="form-group col">
                            <label for="username" class="py-2">Bagian</label>
                            <input type="text" class="form-control" id="username" name="bagian"
                                style="background-color: var(--primary-color); color: var(--forth-color)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Harga</label>
                        <input type="number" class="form-control" id="username" name="harga"
                            style="background-color: var(--primary-color); color: var(--forth-color)" required>
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