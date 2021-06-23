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
                <p style="font-size: 20px;">Form Buku</p>
                <a class="nav-link" href="../admin.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Kode buku</label>
                    <input type="text" class="form-control" style="color: grey;" disabled>
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Judul buku</label>
                    <input type="text" class="form-control" placeholder="Masukan judul buku">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">NO ISBN</label>
                    <input type="text" class="form-control" placeholder="Masukan ISBN">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Penulis</label>
                    <input type="text" class="form-control" placeholder="Masukan penulis">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Penerbit</label>
                    <input type="text" class="form-control" placeholder="Masukan penerbit">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Tahun Terbit</label>
                    <input type="text" class="form-control" placeholder="Masukan tahun">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Harga Pokok</label>
                    <input type="text" class="form-control" placeholder="Masukan harga pokok">
                </div>
                <div class="mb-2 col-sm-15">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Harga Jual</label>
                    <input type="text" class="form-control" placeholder="Masukan harga jual">
                </div>
                <div class="mb-2 col-sm-2">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Diskon</label>
                    <input type="text" class="form-control" placeholder="Masukan diskon">
                </div>
                <a href="#" type="button" class="btn btn-primary">Simpan</a> 
            </div>
        </div>

        <div class="mb-3 col-sm-6" style="margin-top: 20px; margin-left:55%; width:250px;">
            <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Pencarian :</label>
            <input type="text" class="form-control" style="margin-top:-35px; margin-left: 100px; "placeholder="Judul buku / penulis">
        </div>
        <div class="btn-distributor" style="margin-top: -55px; margin-left:87.5%;">
            <a href="#" type="button" class="btn btn-info" style="color: white;">Cari</a>
            <a href="#" type="button" class="btn btn-success" style="color: white;">Refresh</a>
        </div>

        <table align="center" border="1" class="table table-bordered mt-4">
            <tr>
                <th>Kode buku</th>
                <th>Judul</th>
                <th>NO ISBN</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Diskon</th>
                <th>Edit</th>
            </tr>
            <tr>
                <td>BQU000000000021</td>
                <td>Harry Potter</td>
                <td>11209989</td>
                <td>Magazine</td>
                <td>PT. Aku Kamu</td>
                <td>2010</td>
                <td>60.000</td>
                <td>85.000</td>
                <td>5%</td>
                <td><a href="?menu=user&edit&id=<?php echo $r['id'] ?>" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td>BQU000000000017</td>
                <td>Laskar Pelangi</td>
                <td>00908767</td>
                <td>Andrea Hirata</td>
                <td>PT. Grammedia</td>
                <td>2012</td>
                <td>60.000</td>
                <td>80.000</td>
                <td>5%</td>
            </tr>
            <tr>
                <td>BQU000000000099</td>
                <td>Alaska</td>
                <td>23340090</td>
                <td>Lupa ah</td>
                <td>PT. Gramedia</td>
                <td>2018</td>
                <td>50.000</td>
                <td>70.000</td>
                <td>5%</td>
                <td><a href="?menu=user&edit&id=<?php echo $r['id'] ?>" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td colspan="1">Jumlah : <strong>22 buku</strong></td>
                <td colspan="8">Hal : 1 2 3 4 5 6</td>
            </tr>  
        </table>                      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>