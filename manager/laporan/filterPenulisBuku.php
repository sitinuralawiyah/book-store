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
                <p style="font-size: 20px;">Form Filter Buku Berdasarkan Penulis</p>
                <a class="nav-link" href="../manager.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-6" style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Nama Penulis</label>
                    <select name="faktur" class="form-control" required>
                        <option value=""></option>
                        <option>Magazine</option>
                        <option>Andrea Hirata</option>
                        <option>Bagaskara</option>
                        <option>Tere Liye</option>
                    </select>
                </div>
                <a href="#" type="button" class="btn btn-primary" style="width: 100%;">LIHAT</a> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>