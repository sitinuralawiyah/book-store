<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Manager</title>
</head>
<body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <h2>Selamat Datang Manager</h2>
                <a class="nav-link" href="../dashboard.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body">
            <!-- dropdown -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="laporan/cetakFaktur.php">Cetak Faktur</a></li>
                        <li><a class="dropdown-item" href="laporan/semuaPenjualan.php">Semua Penjualan</a></li>
                        <li><a class="dropdown-item" href="laporan/penjualanPertanggal.php">Penjualan Pertanggal</a></li>
                        <li><a class="dropdown-item" href="laporan/semuaDataBuku.php">Semua Data Buku</a></li>
                        <li><a class="dropdown-item" href="laporan/filterPenulisBuku.php">Filter Penulis Buku</a></li>
                        <li><a class="dropdown-item" href="laporan/bukuSeringTerjual.php">Buku Yang Sering Terjual</a></li>
                        <li><a class="dropdown-item" href="laporan/bukuTidakTerjual.php">Buku Yang Tidak Pernah Terjual</a></li>
                        <li><a class="dropdown-item" href="laporan/pasokBuku.php">Pasok Buku</a></li>
                        <li><a class="dropdown-item" href="laporan/filterPasokBuku.php">Filter Pasok Buku</a></li>
                    </ul>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pengaturan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="pengaturan/profil.php">Profil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>