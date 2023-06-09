<?php

    $data_pelanggan [] = array(
        'id_pelanggan' => 'P001',
        'nama_pelanggan' => 'Made',
        'alamat_pelanggan' => 'Jalan Tukad Pakerisan',
        'tlp_pelanggan' => '087861630697',
        'pekerjaan' => 'swasta'
    );

    $data_pelanggan [] = array(
        'id_pelanggan' => 'P002',
        'nama_pelanggan' => 'Wayan',
        'alamat_pelanggan' => 'Jalan Tukad Pakerisan II',
        'tlp_pelanggan' => '087861639643',
        'pekerjaan' => 'Programer'
    );

    $data_pelanggan [] = array(
        'id_pelanggan' => 'P003',
        'nama_pelanggan' => 'Komang',
        'alamat_pelanggan' => 'Jalan Tukad Pakerisan III',
        'tlp_pelanggan' => '087861637635',
        'pekerjaan' => 'Designer'
    );

    
    $json_pelanggan = json_encode($data_pelanggan,JSON_PRETTY_PRINT);
    #print_r($json_pelanggan);exit();
    file_put_contents('pelanggan.json',$json_pelanggan);
?>