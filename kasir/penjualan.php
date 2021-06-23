<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Kasir</title>
</head>
<body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <p style="font-size: 20px;">Form Penjualan</p>
                <a class="nav-link" href="kasir.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">No Faktur</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Judul Buku</label>
                    <input type="text" class="form-control" disabled>
                    <a href="#" type="button" class="btn btn-info" style="margin-left: 102%; margin-top:-12%; color:white;">Lihat</a>
                </div>
                <div class="mb-3 col-sm-6 "style="margin-top:-2%;">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Jumlah Beli</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Total Harga</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <a href="#" type="button" class="btn btn-primary">Tambah Buku</a> 

                <table align="center" border="1" class="table table-bordered mt-4">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Harga Satuan </th>
                        <th>Jumlah Beli </th>
                        <th>PPN</th>
                        <th>Diskon</th>
                        <th>Total</th>
                        <th>Hapus</th>
                    </tr>
                    <tr>
                        <td>Harry Potter</td>
                        <td>50.000 </td>
                        <td>2 Buku</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>95.000</td>
                        <td><a href="?menu=user&hapus&id=<?php echo $r['id'] ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Grand Total</strong></td>
                        <td colspan="1"><strong>95.000</strong></td>
                        <td colspan="1"></td>
                    </tr> 
                </table>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Bayar</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Kembalian / Hutang ( Jika - )</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Tanggal Penjualan</label>
                    <input type="date" class="form-control" placeholder="">
                </div>
                <a href="#" type="button" class="btn btn-primary">Selesai Penjualan</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>