<?php
include 'koneksi.php';

$id            = $_POST['id'];
$nama_produk   = $_POST['nama_produk'];
$keterangan    = $_POST['keterangan'];
$harga         = $_POST['harga'];
$jumlah        = $_POST['jumlah'];

$query = "UPDATE produk SET
            nama_produk     = '$nama_produk',
            keterangan      = '$keterangan',
            harga           = '$harga',
            jumlah          = '$jumlah'
            WHERE id = $id";    

$result = mysqli_query($koneksi,$query);

if ($result) {
    header('location: index.php');
} else {
    echo "data gagal diubah";
}

?>