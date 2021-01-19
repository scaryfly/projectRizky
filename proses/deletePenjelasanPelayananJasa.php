<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_pelayananjasa WHERE id_pelayananJasa= $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/penjelasanPelayananJasa.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/penjelasanPelayananJasa.php';  </script>";
    }
?>