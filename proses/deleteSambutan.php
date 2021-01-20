<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_sambutan WHERE id_sambutan = $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/sambutan.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/sambutan.php';  </script>";
    }
?>