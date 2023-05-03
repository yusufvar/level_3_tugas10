<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>pijarcamp | CRUD</title>
</head>

<body>
    <DIV class="container">
        <div class="col-10 m-auto">
            <p class="h1 text-center p-5">produk pijarmart</p>
            <a href="buat.php" class="btn btn-primary">Tambah Produk</a>
            <table class="table table-hover table-bordered border-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">produk</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">harga</th>
                        <th scope="col">jumlah</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <?php
                    $query = "SELECT * FROM produk";
                    $result = mysqli_query($koneksi,$query);

                    $nomer = 1;
                    while ($data = mysqli_fetch_assoc($result)){
                ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $nomer++?></th>
                        <td><?= $data['nama_produk']?></td>
                        <td><?= $data['keterangan']?></td>
                        <td><?= $data['harga']?></td>
                        <td><?= $data['jumlah']?></td>
                        <th scope="col">
                            <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning">Edit</a>
                            <form class="d-inline" action="hapus.php" method="post">
                                <input type="hidden" name="id" value="<?= $data['id']?>">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </th>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </DIV>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>