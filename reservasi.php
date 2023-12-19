<?php
    include 'fungsi/koneksi.php';
    session_start();
    include 'layouts/navbar.php';
    $id = $_GET['id'];

    $data = viewData("SELECT * FROM tb_pertandingan WHERE id_pertandingan = $id", true);
    $tanggal = date('d F Y', strtotime($data['tanggal']));



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiketbola.com</title>

</head>

<body theme="dracula">


    <!-- CONTENT -->
    <div class="container py-3">
        <div class="row">
            <!-- CONTENT -->

            <p style="font-size: 42px;" class="text-center pb-4">Pemesanan Tiket</p>
            <div class="container">
                <div class="row">
                    <div class="col-4" style="display: block">
                        <img src="assets/liga-bri.jpg" alt="" class="py-3 mx-3">
                    </div>
                    <div class="col py-3">
                    <p class="" style="font-size: 26px; text-transform: uppercase"><?= $data['pemain1']?> VS
                                <?= $data['pemain2']?></p>
                            <p class="" style="font-size: 16px; text-align: justify;">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Eum nisi aliquid voluptatum? Fugiat eaque numquam magnam hic quaerat
                                enim
                                magni distinctio modi corporis quod dignissimos nobis, inventore voluptas velit vel
                                cupiditate fugit maiores autem minus beatae consequatur animi libero at dolore.
                                Molestiae
                                qui a in assumenda quas reiciendis. Alias assumenda modi distinctio doloremque deleniti
                                sint, ab culpa porro illo, enim veritatis id aut officia vero ex. In quidem incidunt
                                fuga
                                velit quaerat quisquam? Quis nobis voluptatibus amet molestiae voluptatum iure mollitia
                                aliquam dignissimos fuga? Rem accusantium quia quaerat magnam quae, odio cum totam.
                                Debitis
                                quidem consequuntur eum placeat modi nam!</p>
                            
                            <p class="" style="font-size: 26px; text-align: justify; font-weight: 600"><?= $tanggal?></p>
                            <div class="row d-flex justify-content-end py-3">
                                <a href="confirm.php?id=<?= $id?>#bayar" class="btn btn-primary" style="width: 150px"
                                    id="Buy">Beli</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









</body>

</html>