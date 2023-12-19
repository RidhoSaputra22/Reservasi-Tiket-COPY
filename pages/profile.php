<?php
$id = $_SESSION['id'];
$dataUser = viewData("SELECT * FROM tb_user WHERE id_user = $id", true);


?>

<p style="font-size: 43px">Profile User</p>
<div class="row d-flex row-cols-4 pt-3 ">
    <div class="col " style="width: 320px; ">
        <img src="assets/user.jpg" alt="usr"
            style="width: 250px; height: 290px; padding: 0px; margin: 0px; border: 10px solid var(--secondary-color); border-radius: 10px">
    </div>
    <div class="col ">
        <table class="" cellpadding="8" style="width: 100%;" >
            <tbody style="font-size: 27px; background-color: var(--primary-color)!important; padding: 10px;">
                <tr>
                    <td style="width: 70%;">Nama</td>
                    <td>:</td>
                    <td><?= $dataUser['nm_user']?></td>

                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $dataUser['alamat_user']?></td>
                </tr>
                <tr>
                    <td>DMS</td>
                    <td>:</td>
                    <td><?= $dataUser['DMS_user']?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?= $dataUser['jabatan_user']?></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td>:</td>
                    <td><?= $dataUser['hp_user']?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<div class="row pt-3">
    <p style="font-size: 17px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, consequuntur. Aperiam
        architecto adipisci dolore delectus veritatis, perferendis maxime impedit laborum consequuntur assumenda ad
        ratione fuga ipsa est fugiat aliquid minima! Quaerat possimus dicta ab ducimus vel repellat distinctio id
        voluptatem culpa? Dolorum, amet. Sint distinctio doloremque voluptatum tenetur impedit dignissimos facere! Hic
        repellat ullam sequi iste modi tenetur cupiditate? Distinctio maiores reiciendis rerum fugiat expedita iure
        delectus rem suscipit aut, eaque vero ullam eius alias. Animi dolorum, quibusdam eos dolores doloremque ipsum
        quae deleniti iure iste ipsam architecto doloribus illum sint amet maiores perspiciatis soluta excepturi
        officiis? Porro, eum provident.</p>

</div>