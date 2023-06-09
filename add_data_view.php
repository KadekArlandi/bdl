<?php   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">

    <div class="row border rounded-2 p-2">

        <div class="bg-success text-white text-center p-2 rounded border">
            <h1>Tambah Data</h1>
        </div>

        <div class="row">
            <form action="add_data.php" method="post">
                <div class="form-group pt-2">
                    <label for="id_pelanggan">Id Pelanggan</label>
                    <input type="text" class="form-control" name="id_pelanggan" id="id_pelanggan" placeholder="Masukkan Id">
                </div>
                <div class="form-group pt-2">
                    <label for="nama_pelanggan">Nama</label>
                    <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama Pelanggan">
                </div>
                <div class="form-group pt-2">
                    <label for="alamat_pelanggan">Alamat</label>
                    <input type="text" class="form-control" name="alamat_pelanggan" id="alamat_pelanggan" placeholder="Alamat">
                </div>
                <div class="form-group pt-2">
                    <label for="tlp_pelanggan">Nomor Telepon</label>
                    <input type="text" class="form-control" name="tlp_pelanggan" id="tlp_pelanggan" placeholder="Nomor Telepon">
                </div>
                <div class="form-group pt-2">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                </div>
                <div class="col-12 pt-2">
                    <button type="submit" class="btn btn-secondary"> Tambah </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>