<?php
    include("../db.php");
    $id = $_GET ['id'];
    // Pesan Hapus data
    $sql = mysqli_query($conn, "DELETE FROM tb_visimisi WHERE id_visiMisi = $id");
    if($sql){
        echo "<script> alert('Delete sukses'); window.location='../adminContent/visiMisi.php';  </script>";
    }else{
        echo "<script> alert('Delete gagal'); window.location='../adminContent/visiMisi.php';  </script>";
    }
?>