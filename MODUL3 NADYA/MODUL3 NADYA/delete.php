<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
include("connect.php");
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$id=$_GET["id"];

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$query="DELETE FROM showroom_mobil WHERE id='$id'";
mysqli_query($connect,$query);
if(mysqli_affected_rows($connect)){
    echo "<script>
    alert('data berhasil dihapus');
    location.href='list_mobil.php';
    </script>";
}

?>