<?php
    include("../db.php");
    if(isset($_POST['submit'] ))
    {
        $jenjang = $_POST['jenjang'];
        $biaya = $_POST ['biaya'];
        $ket = $_POST['ket'];

        $query = mysqli_query($conn,"INSERT INTO tb_kategoriKunjungan (jenjang, biaya, ket) values ('$jenjang', $biaya, '$ket') ");
        if ($query){
            echo "<script>alert ('Simpan Kategori Kunjungan Berhasil'); window.location='../adminContent/kategoriKunjungan.php'</script>";
        }else{
            echo "<script>alert('Simpan Kategori Kunjungan Gagal'); window.location='../adminContent/kategoriKunjungan.php'</script>";
        }
    }else{
        echo "<script>alert('Simpan Kategori Kunjungan Gagal'); window.location='../adminContent/kategoriKunjungan.php'</script>";
    }
?>