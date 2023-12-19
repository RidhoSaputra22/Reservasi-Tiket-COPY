<?php
    include 'fungsi/koneksi.php';
    session_start();
    include 'layouts/navbar.php';
    $id = $_GET['id'];

    if(isset($_SESSION['id'])){
        $idUser = $_SESSION['id'];
    }else{
        header("Location: login.php");
    }
    
    $data = viewData("SELECT * FROM tb_pertandingan WHERE id_pertandingan = $id");
    $r = mysqli_fetch_assoc($data);
    
    $dataUser = mysqli_fetch_assoc(viewData("SELECT * FROM tb_user WHERE id_user = '$idUser'"));
    
    $tanggal = date('d F Y', strtotime($r['tanggal']));

    // print_r($dataUser);
    


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
    <div class="container " id="bayar">
        <div class="row py-5">
            <div class="col card p-4" style="background-color: var(--secondary-color)">
                <form method="POST" action="fungsi/addData.php" ">
                    <div style=" display: none">
                    <input type="text" name="id_user" value="<?= $idUser?>">
                    <input type="text" name="id_pertandingan" value="<?= $id?>">

            </div>


            <div class="mb-2">
                <p style="font-size: 45px">Beli Tiket</p>
            </div>

            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
                    value="<?= $dataUser['namaDpn']?> <?= $dataUser['namaBlk']?>"
                    style="background-color: var(--primary-color)!important;color:var(--forth-color)" ; readonly>
            </div>
            <div class="mb-2">
                <label for="exampleInputtext1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="<?= $dataUser['alamat']?>"
                    name="alamat" style="background-color: var(--primary-color)!important;color:var(--forth-color)" ;
                    readonly>
            </div>
            <div class="mb-2">
                <label for="exampleInputtext1" class="form-label">No. Hp</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="<?= $dataUser['hp']?>" name="hp"
                    style="background-color: var(--primary-color)!important;color:var(--forth-color)" ; readonly>
            </div>

            <?php
                    $kelas = viewData("SELECT * FROM tb_kelas"); 
                    
                    ?>

            <div class="row d-flex">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Kategori</label>
                        <select class="form-select" id="inputGroupSelect01" name="kategori"
                            style="background-color: var(--primary-color)!important;color:var(--forth-color)" ;>
                            <?php while($data = mysqli_fetch_assoc($kelas)){?>
                            <option value='<?= $data['id_tribun']?>,<?= $data['harga']?>'><?= $data['kelas']?></option>
                            <?php
                        };
                        ?>
                        </select>

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="tanggal"
                            style="background-color: var(--primary-color)!important;color:var(--forth-color)" ;
                            aria-describedby="emailHelp" value="<?= $tanggal?>" readonly>
                    </div>
                </div>


            </div>

            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Harga</label>
                <input type="text" class="form-control" id="Price" value="95.000" name="harga"
                    style="background-color: var(--primary-color)!important;color:var(--forth-color)";  readonly>
            </div>

            <button type="submit" class="btn btn-primary mt-3" name="addDataTransaksi">Submit</button>
            </form>

        </div>

        <div class="col">
            <div class="card p-3" style="background-color: var(--secondary-color)!important;color:var(--forth-color)" ;>
                <div class="">
                    <p style="font-size: 35px">Informasi Pembayaran</p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No REK</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="5055-0101-2324-221"
                        style="background-color: var(--primary-color)!important;color:var(--forth-color)" ; readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="exampleInputtext1" value="RIDHO FEBRI SAPUTRA"
                        style="background-color: var(--primary-color)!important;color:var(--forth-color)" ; readonly>
                </div>

            </div>

            <div class="card p-3 mt-3"
                style="background-color: var(--secondary-color)!important;color:var(--forth-color)" ;>

                <!-- TODO: GET DATA FROM DATABASE -->
                <div class="row">
                    <div class="col">
                        <img src="assets/liga-bri.jpg" alt="" style="width:290px; ">
                    </div>
                    <div class="col">
                        <div class="">
                            <p style="font-size: 35px">Pertandingan</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic impedit iusto, odit
                                minima in similique accusantium nobis distinctio sit ab accusamus iste ut ad
                                corporis delectus. Quos ex culpa excepturi.</p>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>


    <!-- TODO: Buat logika dimana nilai dari option bisa sampai ke sini walaupun menggunakan php  -->
    <script>
    var select = document.getElementById('inputGroupSelect01');
    var price = document.getElementById('Price');
    var buy = document.getElementById('Buy');
    let optionVal = select.options[select.selectedIndex].value;

    console.log(optionVal);

    select.onchange = function(event) {
        let optionVal = select.options[select.selectedIndex].value;
        
        price.value = optionVal.split(',')[1];

        




        // console.log(optionVal);



        // if (optionVal == "2") {
        //     price.value = "120.000";
        // }
        // if (optionVal == "3") {
        //     price.value = "200.000";
        // }
    }
    </script>





</body>

</html>