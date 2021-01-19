<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_pelayananinformasi WHERE id_pelayananInformasi= $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/penjelasanPelayananInformasi.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/penjelasanPelayananInformasi.php';  </script>";
    }
?>