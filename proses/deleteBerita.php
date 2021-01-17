<?php
    include("../db.php");
    $id_berita = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tbberita WHERE id_berita= $id_berita");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/berita.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/berita.php';  </script>";
    }
?>