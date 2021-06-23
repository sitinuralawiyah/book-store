<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <p style="font-size: 20px;">DATA BUKU BANYAK TERJUAL</p>
                <a class="nav-link" href="../admin.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
                <a href="#" type="button" class="btn btn-success">Export Excel</a>
                <table align="center" border="1" class="table table-bordered mt-4">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>No ISBN</th>
                        <th>Penulis</th>
                        <th>Penerbit </th>
                        <th>Harga Jual</th>
                        <th>Total Jumlah Beli</th>
                        <th>Total Transaksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Harry Potter</td>
                        <td>11209989</td>
                        <td>Magazine</td>
                        <td>PT. Aku Kamu</td>
                        <td>85.000</td>
                        <td>122222</td>
                        <td>22009</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Laskar Pelangi</td>
                        <td>00908767</td>
                        <td>Andrea Hirata</td>
                        <td>PT. Grammedia</td>
                        <td>80.000</td>
                        <td>277</td>
                        <td>210</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>3</td>
                        <td>Catatan AKhir Sekolah</td>
                        <td>2224783578</td>
                        <td>Putri Hani</td>
                        <td>PT Grammed</td>
                        <td>75.000</td>
                        <td>567</td>
                        <td>456</td>
                    </tr>
                    <tr>
                        <td colspan="1"><strong>Jumlah</strong></td>
                        <td colspan="8"><strong>3 Buku</strong></td>
                    </tr>  
                </table>                       
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>