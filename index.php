<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller();

$tabel = "login";
@$username = $_POST['user'];
@$password = base64_encode($_POST['pass']);
$redirect = "dashboard.php";

if(isset($_POST['login'])){
    $go->login($con, $tabel, $username, $password, $redirect);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>login</title>
</head>
<body>
    <form method="post">
        <div class="container" style="margin-top: 7%; margin-left: 28%;">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <h1 style="text-align:center;">Form Login</h1>
                    <hr>
                    <div class="modal-body">        
                        <div class="form-group mb-3">
                            <input type="text" class="form-control input-lg" name="user" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control input-lg" name="pass" placeholder="Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-lg" name="akses" required>
                                <option></option>
                                <option value="manager">Manager</option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button name="login" class="btn btn-primary btn-lg btn-block" style="width: 100%;">Masuk</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->

    </form>
</body>