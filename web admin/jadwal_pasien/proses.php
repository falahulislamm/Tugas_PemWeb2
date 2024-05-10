<?php
    $koneksi = mysqli_connect("localhost", "root", "", "dbpuskesmas");
    $_id = $_POST['id'];
    $_nama = $_POST['nama'];
    $_no_telp = $_POST['no_telp'];
    $_email = $_POST['email'];
    $_kategori = $_POST['kategori'];
    $_tanggal = $_POST['tanggal'];
    $_pesan = $_POST['pesan'];
    $_submit = $_POST['submit'];
    
    $query = "INSERT INTO jadwal_pasien VALUES ('$_id','$_nama','$_no_telp','$_email','$_kategori','$_tanggal','$_pesan','$_submit')";
    
    mysqli_query($koneksi, $query);
    echo "<script>window.location.href = '../../index.php';</script>";

?>