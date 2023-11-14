<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
 $Host ="localhost :8012";
 $username = "root";
 $Password= " ";
 $Nama_Database= "wad_modul3_nadya";
// 
$connect = mysqli_connect ("localhost:8012","root","","wad_modul3_nadya");

if ($connect -> connect_eror){
    die("Koneksi error:" .$connect -> connect_eror);
}

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya


// 
?>