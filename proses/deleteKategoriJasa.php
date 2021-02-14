<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_kategorijasa WHERE id_kategoriJasa= $id");
    $s="DELETE FROM tb_kategorijasa WHERE id_kategoriJasa= $id";
    echo "<script>console.log(`".$s."`)</script>";
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/kategoriJasa.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/kategoriJasa.php';  </script>";
    }
?>