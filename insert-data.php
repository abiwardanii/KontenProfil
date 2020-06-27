<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
     id,
     nama,
     role,
     availability,
     age,
     location,
     years_experience,
     email   
    )VALUE
    (
        '1',
        'Abiwardani',
        'Frontend Developer',
        'Full Time',
        '20',
        'Malang',
        '1',
        'yohangala44@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE ){
        echo "Insert data telah berhasil";
    } else{
        echo "insert data gagal";
    }
?>