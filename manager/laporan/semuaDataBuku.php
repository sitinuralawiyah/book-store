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
                <p style="font-size: 20px;">LAPORAN SEMUA BUKU</p>
                <a class="nav-link" href="../manager.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
                <a href="#" type="button" class="btn btn-primary">Cetak</a>
                <a href="#" type="button" class="btn btn-success">Export Excel</a>
                <table align="center" border="1" class="table table-bordered mt-4">
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>NO ISBN</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                        <th>Harga Pokok</th>
                        <th>Harga Jual</th>
                        <th>PPN</th>
                        <th>Diskon</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>BQU0000000000000001	</td>
                        <td>Lola si cewek tangguh</td>
                        <td>123455</td>
                        <td>Ira Maharani</td>
                        <td>PT Gramedia</td>
                        <td>10</td>
                        <td>30.000</td>
                        <td>50.000</td>
                        <td>10%</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BQU0000000000000002	</td>
                        <td>persahabatan 3 wanita tapos</td>
                        <td>1234566</td>
                        <td>Rani Intan</td>
                        <td>PT Gramedia</td>
                        <td>55</td>
                        <td>20.000</td>
                        <td>30.000</td>
                        <td>10%</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>BQU0000000000000003	</td>
                        <td>LASKAR PELANGI</td>
                        <td>1234577</td>
                        <td>Andrea Hirata</td>
                        <td>PT Gramedia</td>
                        <td>15</td>
                        <td>30.000</td>
                        <td>40.000</td>
                        <td>10%</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td colspan="1"><strong>Jumlah</strong></td>
                        <td colspan="8"><strong>20 Buku</strong></td>
                    </tr>    
                </table>                       
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>