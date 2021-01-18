<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_kategoriKunjungan WHERE id_kategori= $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/kategoriKunjungan.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/kategoriKunjungan.php';  </script>";
    }
?>