<?php
    include("../db.php");
    $id_galery = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tbgalery WHERE id_galery= $id_galery");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/galery.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/galery.php';  </script>";
    }
?>