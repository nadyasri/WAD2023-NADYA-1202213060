<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET["id"];
    $nama_mobil = $_POST["nama_mobil"];
    $brand_mobil = $_POST["brand_mobil"];
    $warna_mobil = $_POST["warna_mobil"];
    $tipe_mobil = $_POST["tipe_mobil"];
    $harga_mobil = $_POST["harga_mobil"];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    mysqli_query($connect, "UPDATE showroom_mobil set nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' where id='$id'");
    header("Location:list_mobil.php");
?>