<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $id = $_GET['id'];
        $jenjang = $_POST['jenjang'];
        $biaya = $_POST ['biaya'];
        $ket = $_POST ['ket'];
        
        $sql = mysqli_query($conn,"update tb_kategoriKunjungan set jenjang='$jenjang',biaya=$biaya ,ket='$ket' where id_kategori='$id'");
        if ($sql){
            echo "<script>alert ('Ubah Kategori Kunjungan Berhasil'); window.location='../adminContent/kategoriKunjungan.php'</script>";
        }else{
            echo "<script>alert('Ubah Kategori Kunjungan Gagal'); window.location='../adminContent/kategoriKunjungan.php'</script>";
        }
    }else{
        echo "<script>alert('Ubah Kategori Kunjungan Gagal'); window.location='../adminContent/kategoriKunjungan.php'</script>";
    }
?>