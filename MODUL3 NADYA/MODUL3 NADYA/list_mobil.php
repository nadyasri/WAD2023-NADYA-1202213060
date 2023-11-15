<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT) 
            $query = "SELECT * from showroom_mobil";
            $eksekusi = mysqli_query($connect,$query);
            
            ?>
                <table class="table">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">id</th>
                            <th scope="col">NAMA MOBIL</th>
                            <th scope="col">BRAND MOBIL</th>
                            <th scope="col">WARNA MOBIL</th> 
                            <th scope="col">TIPE MOBIL</th>
                            <th scope="col">HARGA MOBIL</th>
                            <th scope="col">ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <tr >
                    <?php foreach($eksekusi as $data): ?>
                        <tr class="table-danger">
                            <td><?= $data["id"]; ?></td>
                            <td><?= $data["nama_mobil"]; ?></td>
                            <td><?= $data["brand_mobil"]; ?></td>
                            <td><?= $data["warna_mobil"]; ?></td>
                            <td><?= $data["tipe_mobil"]; ?></td>
                            <td><?= $data["harga_mobil"]; ?></td>
                            <td><a class="btn btn-info" href="form_detail_mobil.php?id=<?= $data["id"]; ?>">Action</a></td>
                        </tr>

                    <?php endforeach; ?>
                    </tr>

                    
                </tbody>
                </table>
            
            
        </div>
    </center>
</body>
</html>
