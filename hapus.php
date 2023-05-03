<?php
    include 'koneksi.php';

    $id     =$_POST['id'];
    $query  ="DELETE FROM produk WHERE id ='$id'";
    $result = mysqli_query($koneksi,$query);

    if ($result) {
        header('location: index.php');
    } else {
        echo "Produk gagal dihapus";
    }
    
?>