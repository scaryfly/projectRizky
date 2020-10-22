<?php
    include("./db.php");
    $id_berita = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tbberita WHERE id_berita= $id_berita");
    if($sql){
        echo "<script> window.location='list.php'; alert('Delete sukses'); </script>";
    }else{
        echo "<script> window.location='list.php'; alert('Delete gagal'); </script>";
    }
?>
