<?php
    include './fungsi/koneksi.php';
    session_start();
    include './layouts/navbar.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiketbola.com</title>

</head>

<body theme="dracula">


    <!-- NAVBAR -->
    <?php

       


    ?>

    <!-- CONTENT -->
    <div class="container-fluid ">
        <div class="row">
            <!-- SIDEBAR -->

            <div class="col pt-3 px-5 content">
                <!-- CONTENT -->
                <?php
                if(isset($_GET['halaman'])) {
                    switch($_GET['halaman']){
                        case 'liga1':
                            include('pages/liga1.php');
                            break;
                        case 'liga2':
                            include('pages/liga2.php');
                            break;
                        case 'liga3':
                            include('pages/liga3.php');
                            break;
                        case 'setting':
                            include('pages/setting.php');
                            break;
                        case 'data-pesanan':
                            include('pages/data-pesanan.php');
                            break;
                        
                        default:
                            echo'<h1>404 Not Found</h1>';
                    }
                }else{
                    include('pages/home.php');

                }
                ?>


            </div>
            <div class="container d-block d-lg-none ">
                <div class="d-flex justify-content-center text-center py-3 row" style="background-color: var(--secondary-color);">

                    <a href="index.php?halaman=list-barang" class="btn mx-2 p-3 mb-3 col-3 <?= ($halaman == 'list-barang') ? "sidebarActive" : ""?>"
                        style="font-size: 1rem; font-weight: 600; "> Barang</a>
                    <a href="index.php?halaman=list-pinjaman" class="btn mx-2 p-3 mb-3 col-3 <?= ($halaman == 'list-pinjaman') ? "sidebarActive" : ""?>"
                        style="font-size: 1rem;   font-weight: 600;">Pinjaman</a>
                    <a href="index.php?halaman=list-dipinjam" class="btn mx-2 p-3 mb-3 col-3 <?= ($halaman == 'list-dipinjam') ? "sidebarActive" : ""?>"
                        style="font-size: 1rem;   font-weight: 600;"> Dipinjam</a>

                </div>
            </div>



        </div>
    </div>







    <script>
    let table = new DataTable('#myTable', {
        // options
        lengthChange: false,
        pageLength: 6,
        responsive: true,


    });
    </script>

</body>

</html>