<?php
include 'fungsi/koneksi.php';

$id = $_GET['id'];

$data = viewData("SELECT * FROM tb_transaksi JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user JOIN tb_pertandingan ON tb_transaksi.id_pertandingan = tb_pertandingan.id_pertandingan JOIN tb_kelas ON tb_transaksi.id_kelas = tb_kelas.id_tribun;", true);

$pemain1 = $data['pemain1'];    
$pemain2 = $data['pemain2'];    
$nama = $data['nama'];  
$tanggal = $data['tanggal'];
$hp = $data['hp'];  
$kelas = $data['kelas'];  
$bagian = $data['bagian'];    
$liga = $data['liga'];    
$harga = $data['harga'];    








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .receipt {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .receipt-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .receipt-items {
        margin-top: 20px;
    }

    .item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .total {
        font-weight: bold;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="receipt">
            <div class="receipt-header">
                <h2 style="font-size: 48px">Tiketbola.com </h2>
                <p style="font-size: 30px"><?= $tanggal?></p>
            </div>

            <div class="receipt-items">
                <div class="item row d-flex justify-content-center">
                    <span style="font-size: 24px; font-weight: 600;"><?= $pemain1?> <?= $pemain2?></span>
                </div>
                <hr>
                <div class="item">
                    <span style="font-size: 18px">Nama</span>
                    <span style="font-size: 18px"><?= $nama?></span>
                </div>
                <div class="item">
                    <span style="font-size: 18px">No. Hp</span>
                    <span style="font-size: 18px"><?= $hp?></span>
                </div>
                <div class="item">
                    <span style="font-size: 18px">Kelas</span>
                    <span style="font-size: 18px"><?= $kelas?></span>
                </div>
                <div class="item">
                    <span style="font-size: 18px">Bagian</span>
                    <span style="font-size: 18px"><?= $bagian?></span>
                </div>
                <div class="item">
                    <span style="font-size: 18px">Liga</span>
                    <span style="font-size: 18px"><?= $liga?></span>
                </div>
               
            </div>

            <div class="total">
                <hr>
                <div class="item">
                    <span>Total</span>
                    <span><?= $harga?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>