<?php
$PAGE = "User";
$data = viewData("SELECT * FROM tb_user");

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
                        <th>Alamat </th>
                        <th>No. Hp</th>
                        <th>Gender</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($r = mysqli_fetch_assoc($data)){
                    $id_user = $r['id_user'];
                    $namaDpn = $r['namaDpn'];
                    $namaBlk = $r['namaBlk'];
                    $alamat = $r['alamat'];
                    $hp = $r['hp'];
                    $jk = $r['jk'];
                    $username = $r['username'];
                    $password = $r['password'];
                    ?>

                    <tr class="trows">
                        <td><?= $namaDpn?> <?= $namaBlk?></td>
                        <td><?= $alamat?></td>
                        <td><?= $hp?></td>
                        <td><?= $jk?></td>
                        <td><?= $username?></td>
                        <td><?= $password?></td>
                        <td>
                            <!-- EDIT BTN -->
                            <button type="button" class="btn edit" data-bs-toggle="modal"
                                data-bs-target="#EDIT<?= $id_user?>">
                                EDIT
                            </button>
                            <!-- DELETE BTN -->
                            <button type="button" class="btn del" data-bs-toggle="modal"
                                data-bs-target="#DELETE<?= $id_user?>">
                                DELETE
                            </button>
                        </td>


                    </tr>

                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="EDIT<?= $id_user?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit: <?= $namaDpn?>
                                        <?= $namaBlk?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/editData.php" method="post">
                                    <input type="text" value="<?= $id_user?>" name="id" style="display: none">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="username" class="py-2">Nama Depan</label>
                                                <input type="text" class="form-control" id="username" name="nama_depan"
                                                    style="background-color: var(--primary-color); color: var(--forth-color)"
                                                    value="<?= $namaDpn?>" required>
                                            </div>
                                            <div class="form-group col">
                                                <label for="username" class="py-2">Nama Belakang</label>
                                                <input type="text" class="form-control" id="username"
                                                    name="nama_belakang"
                                                    style="background-color: var(--primary-color); color: var(--forth-color)"
                                                    value="<?= $namaBlk?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Alamat</label>
                                            <input type="text" class="form-control" id="username" name="alamat"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $alamat?>" required>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="username" class="py-2">No. HP</label>
                                                <input type="text" class="form-control" id="username" name="hp"
                                                    style="background-color: var(--primary-color); color: var(--forth-color)"
                                                    value="<?= $hp?>" required>
                                            </div>

                                            <div class="form-group col">
                                                <label for="username" class="py-2">Gender</label>
                                                <input type="text" class="form-control" id="username" name="jk"
                                                    style="background-color: var(--primary-color); color: var(--forth-color)"
                                                    value="<?= $jk?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $username?>" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="py-2">Password</label>
                                            <input type="text" class="form-control" id="username" name="password"
                                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                                value="<?= $password?>" required>
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
                    <div class="modal fade" id="DELETE<?= $id_user?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4" id="exampleModalLabel">Hapus: <?= $namaDpn?>
                                        <?= $namaBlk?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="../fungsi/delData.php" method="post">
                                    <input type="text" value="<?= $id_user?>" name="id" style="display: none">

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

<!-- MODAL EDIT -->
<div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../fungsi/addData.php" method="post">
                <input type="text"  name="id" style="display: none">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col">
                            <label for="username" class="py-2">Nama Depan</label>
                            <input type="text" class="form-control" id="username" name="nama_depan"
                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                 required>
                        </div>
                        <div class="form-group col">
                            <label for="username" class="py-2">Nama Belakang</label>
                            <input type="text" class="form-control" id="username" name="nama_belakang"
                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                 required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Alamat</label>
                        <input type="text" class="form-control" id="username" name="alamat"
                            style="background-color: var(--primary-color); color: var(--forth-color)"
                             required>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="username" class="py-2">No. HP</label>
                            <input type="text" class="form-control" id="username" name="hp"
                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                 required>
                        </div>

                        <div class="form-group col">
                            <label for="username" class="py-2">Gender</label>
                            <input type="text" class="form-control" id="username" name="jk"
                                style="background-color: var(--primary-color); color: var(--forth-color)"
                                 required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            style="background-color: var(--primary-color); color: var(--forth-color)"
                             required>
                    </div>

                    <div class="form-group">
                        <label for="username" class="py-2">Password</label>
                        <input type="text" class="form-control" id="username" name="password"
                            style="background-color: var(--primary-color); color: var(--forth-color)"
                             required>
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