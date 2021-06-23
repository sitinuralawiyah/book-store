<!doctype html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Kasir</title>
</head>
<body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <p style="font-size: 20px;">DATA SEMUA PENJUALAN BUKU</p>
                <a class="nav-link" href="kasir.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body">
                <a href="#" type="button" class="btn btn-primary">Cetak</a>
                <a href="#" type="button" class="btn btn-success">Export Excel</a>
                <table align="center" border="1" class="table table-bordered mt-4">
                    <tr>
                        <th>No</th>
                        <th>No Faktur</th>
                        <th>Judul Buku</th>
                        <th>Jumlah Beli</th>
                        <th>Harga Satuan </th>
                        <th>PPN</th>
                        <th>Diskon</th>
                        <th>Total Harga</th>
                        <th>Tanggal Transaksi</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>F1000000JH</td>
                        <td>Harry Potter</td>
                        <td>2 Buku</td>
                        <td>50.000 </td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>95.000</td>
                        <td>21-06-2021</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>F1000000HN</td>
                        <td>My Posesive</td>
                        <td>1 Buku</td>
                        <td>30.000 </td>
                        <td>10%</td>
                        <td>10%</td>
                        <td>30.000</td>
                        <td>21-06-2021</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>F1000000AS</td>
                        <td>Si Bolang</td>
                        <td>2 Buku</td>
                        <td>10.000 </td>
                        <td>2%</td>
                        <td>2%</td>
                        <td>10.000</td>
                        <td>22-06-2021</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>F1000000AL</td>
                        <td>Qisman</td>
                        <td>5 Buku</td>
                        <td>10.000 </td>
                        <td>10%</td>
                        <td>10%</td>
                        <td>50.000</td>
                        <td>22-06-2021</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>F1000000DV</td>
                        <td>Raja Ratu</td>
                        <td>1 Buku</td>
                        <td>70.000 </td>
                        <td>3%</td>
                        <td>3%</td>
                        <td>70.000</td>
                        <td>22-06-2021</td>
                    </tr>
                    <tr>
                        <td colspan="1"><strong>Total</strong></td>
                        <td colspan="1"><strong>5 Transaksi</strong></td>
                        <td colspan="1"><strong>Jumlah</strong></td>
                        <td colspan="1"><strong>520 Buku</strong></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"><strong>Grand Total</strong></td>
                        <td colspan="1"><strong>13.320.000</strong></td>

                    </tr>                 
                </table>                       
            </div>
        </div>
    </div>
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js integrity=”sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf” crossorigin=”anonymous”></script>
</body>
</html>