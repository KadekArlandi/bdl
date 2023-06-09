
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pelanggan JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
<?php

    $file = file_get_contents('pelanggan.json');
    $data_pelanggan = json_decode($file);

?>
<div class="container">
    <div class="row">
        <a href="add_data_view.php" class="btn btn-secondary">Tambah Data</a>
    </div>

    <div class="row">

        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telpon</th>
                        <th>Pekerjaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = file_get_contents('pelanggan.json');
                    $data_pelanggan = json_decode($file);
                    foreach ($data_pelanggan as $pelanggan) {
                        echo '<tr>';
                        echo '<td>'.$pelanggan->id_pelanggan.'</td>';
                        echo '<td>'.$pelanggan->nama_pelanggan.'</td>';
                        echo '<td>'.$pelanggan->alamat_pelanggan.'</td>';
                        echo '<td>'.$pelanggan->tlp_pelanggan.'</td>';
                        echo '<td>'.$pelanggan->pekerjaan.'</td>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>