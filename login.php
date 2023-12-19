<?php
require 'fungsi/koneksi.php';

session_start();
session_destroy();



//cek login. terdaftar atau tidak
if(isset($_POST['login'])){ //--> apa yang akan terjadi jika tombol di pencet
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($_POST['role'] == "admin"){
      $sql = "SELECT * FROM tb_admin WHERE nama = '$username'";
      $data = mysqli_query($koneksi, $sql);
      if($row = mysqli_fetch_assoc($data)){
        session_start();

        $_SESSION['name'] = $username;
        $_SESSION['role'] = "user";
        $_SESSION['id'] = $row['id_admin'];


        header("Location:admin/");
      }
      else{
        ?>
<div class="alert alert-warning" role="alert py-3">
    Password atau username anda salah!!
</div>
<?php
      }
    }

    if($_POST['role'] == "user"){
      $sql = "SELECT * FROM tb_user WHERE username = '$username'";
      $data = mysqli_query($koneksi, $sql);
      if($row = mysqli_fetch_assoc($data)){
        session_start();

        $_SESSION['name'] = $username;
        $_SESSION['role'] = "admin";
        $_SESSION['id'] = $row['id_user'];

        header("Location: index.php ");


      }
      else{
        ?>
<div class="alert alert-warning" role="alert py-3">
    Password atau username anda salah!!
</div>
<?php
      }
    }
};



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/DataTables/datatables.js"></script>
</head>

<style>
    .login-container{
        background-color: var(--secondary-color)!important; 
        color: var(--forth-color)!important; 
        width: 400px;
        box-shadow: 6px 10px 26px -3px rgba(0,0,0,0.1),0px 10px 15px -3px rgba(0,0,0,0.1),11px 10px 15px -3px rgba(0,0,0,0.1);

    }

    .input-from{
        background-color: var(--primary-color)!important;
        color: var(--forth-color)!important;
    }

    ::placeholder{
        color: var(--forth-color)!important;
    }

    ::-ms-input-placeholder { /* Edge 12-18 */
        color: var(--forth-color)!important;
    }

    .btn{
        background-color: var(--forth-color);
        color: var(--secondary-color);
        font-weight: 500;



    }

</style>



<body theme="dracula">
    <div class="container">
        <div class="row d-flex align-items-center " style="height: 100vh ">
            <div class="d-flex justify-content-center ">
                <div class="p-5 card login-container" >
                    <h2 class="text-center pb-2">Login Inventaris</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="username" class="py-2">Username</label>
                            <input type="text" class="form-control input-from" id="username" placeholder="Username" name="username" 
                                required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="py-2">Password</label>
                            <input type="password" class="form-control input-from" id="password" placeholder="Password"
                                name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="role" class="py-2">Role</label>
                            <select class="form-control input-from" id="role" name="role">
                                <option value="user" class="input-from">User</option>
                                <option value="admin" class="input-from">Admin</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn " name="login">Login</button>
                        <a href="registrasi.php" class="btn ">Belum Regestrasi?</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap -->

</body>

</html>